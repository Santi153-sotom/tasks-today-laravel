<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTodaySeeder extends Seeder
{
    public function run(): void
    {
        $today = now()->toDateString();
        $yesterday = now()->subDay()->toDateString();
        $tomorrow = now()->addDay()->toDateString();
        $dayAfterTomorrow = now()->addDays(2)->toDateString();

        DB::table('tasks')->insert([
            ['title' => 'Review TSA1 requirements', 'status' => 'completed', 'task_date' => $yesterday],
            ['title' => 'Create Laravel migrations', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Build the Welcome page', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Build the Task List page', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Build the Profile page', 'status' => 'pending', 'task_date' => $tomorrow],
            ['title' => 'Build the About page', 'status' => 'pending', 'task_date' => $tomorrow],
            ['title' => 'Test the task date filter', 'status' => 'pending', 'task_date' => $dayAfterTomorrow],
            ['title' => 'Prepare the project submission', 'status' => 'pending', 'task_date' => $dayAfterTomorrow],
        ]);

        DB::table('users')->insert([
            [
                'username' => 'franzen',
                'full_name' => 'Saint Franzen Y. De Jesus',
                'email' => 'franzen.dejesus@example.com',
            ],
        ]);
    }
}