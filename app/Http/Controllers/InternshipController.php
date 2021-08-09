<?php

namespace App\Http\Controllers;


use App\Services\InternshipServices\InternshipService;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class InternshipController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function __construct(InternshipService $internshipService) {
        $this->service = $internshipService;
    }

    // get list data 
    public function all()
    {
        return parent::all();
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
