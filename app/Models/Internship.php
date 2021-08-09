<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Internship extends Model
{
    protected $fillable = [
        'id',
        'person_name',
        'company_id',
        'start_date', 
        'end_date', 
        'issue_date',
        'academic_year_id',
        'student_id'
    ];


    public function company(){
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
    // public function academic_year(){
    //     return $this->hasOne(AcademicYear::class, 'id', 'academic_year_id');
    // }
    // public function student(){
    //     return $this->hasOne(Student::class, 'id', 'student_id');
    // }

}
