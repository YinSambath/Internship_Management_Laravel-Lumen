<?php

namespace App\Services;

use Illuminate\Http\Request;

class BaseService
{
    protected $model;
    protected $service;
    
    // get all date with filtering
    public function getAllInfo($relation = [], $selectFill = ['*']) {
        $limit = 5;
        $arrays = $this->model->with($relation)->select($selectFill);
        // filter by academic_year
        if(isset(request()->academic_year_id)) {
            $arrays = $arrays->where('academic_year_id', request()->academic_year_id);
        }
        // filter by person_name
        // if(isset(request()->search)) {
        //     $arrays = $arrays->where('person_name', request()->search);
        // }
        // pagination
        if(isset(request()->limit)) {
            $limit = request()->limit;
        }

        return $arrays->paginate($limit);
    }
    
    // get an info of internship or view form 
    public function getInfo($id=null){
        if($id!==null){
            return $this->model->findOrFail($id);
        } else {
            return response([
                'message' => 'ID does not exist'
            ]);
        }
    }
    // function create form
    public function create($attributes) {
        $this->model->create($attributes);
        return response([
            'message' => 'Create Successfully'
        ]);
    }
    // function delete form
    public function delete($id) {
        $this->model->findOrFail($id)->delete();
        return response([
            'message' => 'Delete successfully'
        ]);
    }
    // function update form
    public function update(Request $request, $id) {

        $data = $this->model->find($id);
        
        if(!$data) {
            return response([
                'message' => 'ID is not exist'
            ]);
        }
        $data->update($request->all());
        return response([
            'message' => 'Update successfully'
        ]);      
    }

}