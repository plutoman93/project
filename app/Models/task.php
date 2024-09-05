<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'task_detail',
        'start_date',
        'due_date',
        'file',
        'task_type',
        'status_task'
    ];

    protected $guarded = [];

    public function taskstatus()
    {
        return $this->belongsTo(TaskStatus::class, 'task_status_id', 'task_status_id');
    }
    public function tasktype()
    {
        return $this->belongsTo(TaskType::class, 'type_id', 'type_id');
    }
    public function userid()
    {
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }
}
