<?php

use App\Models\Student;
use Database\Seeders\AcademicYearSeeder;
use Database\Seeders\CompanySeeder;
use Database\Seeders\StudentSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AcademicYearSeeder::class,
            CompanySeeder::class,
            StudentSeeder::class
        ]);

    }
}
