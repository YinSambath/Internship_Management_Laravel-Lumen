<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $fillable = [
        'duration'
    ];

    // public function internships() {
    //     return $this->belongsTo(internship::class);
    // }
}
