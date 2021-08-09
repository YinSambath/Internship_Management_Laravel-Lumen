<?php

namespace App\Services\InternshipServices;

use App\Models\Internship;
use App\Services\BaseService;

class InternshipService extends BaseService 
{
    public function __construct(Internship $internship) {
        $this->model = $internship;
    }
 
}