<?php
namespace App\Livewire\Project;
use App\Models\Task; // เปลี่ยนชื่อตัวแปรให้ตรงกับชื่อโมเดลที่ใช้ PascalCase
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component // เปลี่ยน Addtask เป็น AddTask
{
    use WithFileUploads;

    public $task_name, $task_detail, $start_date, $due_date, $file, $task_type, $status_task;

    public function add()
    {
        // Validate data
        $this->validate([
            'task_name' => 'required|min:3',
            'task_detail' => 'required',
            'start_date' => 'required|date',
            'due_date' => 'required|date',
            'task_type' => 'required',
            'status_task' => 'required',
        ],[
            'task_name.required' => "กรุณากรอกชื่องาน",
            'task_name.min' => "ชื่องานต้องมีมากกว่า 3 ตัวอักษร",
            'task_detail.required' => "กรุณากรอกรายละเอียดงาน",
        ]);

        try {
            // Save Task
            $task = Task::create([
                'task_name' => $this->task_name,
                'task_detail' => $this->task_detail,
                'start_date' => $this->start_date,
                'due_date' => $this->due_date, //$this-> คำสั่งในการเข้าถึงตัวแปร (จำเป็นต้องตรงกันและถูกต้องตามที่ประกาศใช้งานจริง)
                'task_type' => $this->task_type,
                'status_task' => $this->status_task,
                // 'created_by' => auth()->user()->id, // ยืนยันว่าใช้ auth()->user() อย่างถูกต้อง
            ]);

            // Save File (if exists)
            if ($this->file) {
                $filePath = $this->file->store('tasks', 'public');
                $task->task_file = $filePath;
                $task->save();
            }

            return redirect()->to(route('home-dashboard')); //หลัง Login ไปที่หน้า home-dashboard
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.project.add'); //เรียก view ที่โฟลเดอร์ livewire/project/add
    }
}
