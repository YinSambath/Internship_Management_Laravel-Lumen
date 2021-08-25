<?php

namespace App\Exports;

use App\Models\Internship;
use Maatwebsite\Excel\Concerns\FromCollection;

class InternshipExport implements FromCollection
{
    public function collection() {
        return Internship::all();
    }
}