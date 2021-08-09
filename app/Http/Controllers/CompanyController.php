<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Services\CompanyServices\CompanyService;

class CompanyController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function __construct(CompanyService $companyService) {
        $this->service = $companyService;
    }

    // get list data 
    public function all()
    {
        return $this->service->all();
    }

    // Form create
    public function create(Request $request)
    {
        
        return parent::create($request);
    }

    // Delete information by ID
    public function delete($id) 
    {
        return parent::delete($id);
    }
    
    // Update internship information by Id
    public function update(Request $request, $id)
    {
        return parent::update($request, $id);
    }

    // show the information by Id
    public function view($id) 
    {
        return parent::view($id);
    }

    
}
