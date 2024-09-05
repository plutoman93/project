<?php

namespace App\Livewire;

use App\Http\Controllers\ScheduleController;
use Livewire\Component;
use Livewire\WithFileUploads;
 // เรียกใช้ Controller ที่สร้างไว้

class AddTask extends Component
{
    use WithFileUploads;
    public $task_name, $task_detail, $start_date, $due_date, $task_file, $task_type, $status_task;

    public function add()
    {
        $validatedData = $this->validate([
            'task_name' => 'required|string|max:255',
            'task_detail' => 'required|string|max:1000',
            'start_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:start_date',
            'task_file' => 'nullable|file|max:10240',
            'task_type' => 'required|string',
            'status_task' => 'required|string',
        ]);

        // เรียกใช้ Controller ในการบันทึกข้อมูล
        $scheduleController = new ScheduleController();
        $scheduleController->storeTask($validatedData);

        session()->flash('success', 'Task added successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.addtask');
    }
}

