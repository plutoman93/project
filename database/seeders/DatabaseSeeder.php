<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(TitleSeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(TaskSeeder::class);
    }
        // \App\Models\User::factory(10)->create();
        // $this ->call(account_status::class);
        // $this ->call(department::class);
        // $this ->call(faculty::class);
        // $this ->call(notification_time::class);
        // $this ->call(task_status::class);
        // $this ->call(task_type::class);
        // $this ->call(task::class);
        // $this ->call(title::class);

        // $this ->call(userSeeder::class);

}
