<?php

namespace App\Services\InternshipServices;

use App\Models\Internship;
use App\Services\BaseService;
use Maatwebsite\Excel\Facades\Excel;

class InternshipService extends BaseService 
{
    public function __construct(Internship $internship) {
        $this->model = $internship;
    }
}