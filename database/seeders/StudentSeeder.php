<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::updateOrCreate(
            ['email' => 'juan@example.com'],
            ['name' => 'Juan Dela Cruz', 'age' => 20],
        );

        Student::updateOrCreate(
            ['email' => 'maria@example.com'],
            ['name' => 'Maria Santos', 'age' => 22],
        );

        Student::factory(10)->create();
    }
}
