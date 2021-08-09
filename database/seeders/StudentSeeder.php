<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();

        $students = [
            [
                'student_name' => 'Yin Sambath'
            ],
            [
                'student_name' => 'Yean Seyha'
            ],
            [
                'student_name' => 'Vin Ilen'
            ],
            [
                'student_name' => 'Kuoch Naro'
            ],
            [
                'student_name' => 'Yem Oudom'
            ],
            [
                'student_name' => 'Dara Roath'
            ],
        ];

        foreach ($students as $student)
        {
            Student::create([
                'student_name' => $student['student_name'],
            ]);
        }

    }
}
