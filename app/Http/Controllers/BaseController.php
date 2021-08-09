<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // get list data 
    public function all()
    {

        return $this->service->getAllInfo(['company']);
    }

    
    public function create(Request $request)
    {

        // $this->validate($request,[
        //     'name' => 'required',
        //     'company' => 'required',
        //     'address' => 'required',
        //     // 'phone' => '',
        //     // 'h_p' => '',
        //     'e_email' => 'required',
        //     // 'web' => '',
        //     'title' => 'required',
        //     'training_field' => 'required',
        //     'start_date' => 'required',
        //     'end_date' => 'required',
        //     'issue_date' => 'required',
        //     'academicYear' => 'required',
        //     'student_id' => 'required',
        //     ]);
        return $this->service->create($request->all());
            
    }

    public function delete($id) 
    {
        return $this->service->delete($id);
    }

    public function update(Request $request, $id)
    {
        return $this->service->update($request, $id);
    }
    public function view($id){
        return $this->service->getInfo($id);
    }
    
}
