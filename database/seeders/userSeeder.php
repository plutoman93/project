<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::factory()->count(10)->create();
        // User::truncate();

        // DB::table('users')->insert([
        //     [
        //         'first_name' => 'นายเอ',
        //         'title_id' => Str::random(5),
        //         'department_id' => Str::random(5),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'first_name' => 'นายบี',
        //         'title_id' => Str::random(5),
        //         'department_id' => Str::random(5),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'นายซี',
        //         'title_id' => Str::random(5),
        //         'department_id' => Str::random(5),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }
}

