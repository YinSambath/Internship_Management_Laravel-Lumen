<?php

namespace App\Services\CompanyServices;

use App\Models\Company;
use App\Services\BaseService;

class CompanyService extends BaseService 
{
    public function __construct(Company $company) {
        $this->model = $company;
    }

    public function all() {
        return $this->model->all();
    }
 
}