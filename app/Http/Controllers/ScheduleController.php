<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
class ScheduleController extends Controller
{
    public function store(Request $request)
    {
        // ตรวจสอบข้อมูลที่กรอกในฟอร์ม
        $validatedData = $request->validate([
            'task_name' => 'required|string',
            'task_detail' => 'required|string',
            'start_date' => 'required|string',
            'due_date' => 'required|string',
        ]);

        // บันทึกข้อมูลลงฐานข้อมูล
        Task::create($validatedData);

        return 'บันทึกข้อมูลเรียบร้อยแล้ว';
    }

    // ฟังก์ชันสำหรับแสดงข้อมูลทั้งหมด
    public function index()
    {
        $tasks = Task::all(); // ดึงข้อมูลทั้งหมดจากตาราง tasks
        return view('posts.index', compact('posts')); // ส่งข้อมูลไปแสดงใน view
    }
}
