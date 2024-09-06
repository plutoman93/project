<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class ScheduleController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'task_name' => 'required|string|max:255',
            'task_detail' => 'required|string|max:1000',
            'start_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:start_date',
            'task_file' => 'nullable|file|max:10240', // Adjust if necessary
            'task_type' => 'required|string',
            'status_task' => 'required|string',
        ]);

        Task::create($validatedData);
        return redirect()->route('addtask')->with('success', 'Task added successfully');
    }


    // ฟังก์ชันสำหรับแสดงข้อมูลทั้งหมด
    public function index()
    {
        $tasks = Task::all(); // ดึงข้อมูลทั้งหมดจากตาราง tasks
        return view('addtask.store', compact('data')); // ส่งข้อมูลไปแสดงใน view
    }
}
