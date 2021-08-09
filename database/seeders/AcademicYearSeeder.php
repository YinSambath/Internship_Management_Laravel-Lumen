<?php
namespace Database\Seeders;

use App\Models\AcademicYear;
use Illuminate\Database\Seeder;

class AcademicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicYear::truncate();

        $academicYears = [
            [
                'duration' => '2015-2016',
            ],
            [
                'duration' => '2016-2017',
            ],
            [
                'duration' => '2016-2018',
            ],
            [
                'duration' => '2018-2019',
            ],
            [
                'duration' => '2019-2020',
            ],
            [
                'duration' => '2020-2021',
            ]
        ];

        foreach ($academicYears as $academicYear)
        {
            AcademicYear::create([
                'duration' => $academicYear['duration']
            ]);
        }

    }
}
