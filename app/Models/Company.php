<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [ 
        'company' ,
        'address', 
        'phone', 
        'h_p', 
        'e_mail', 
        'web', 
        'title', 
        'training_field',
    ];

    public function interships(){
        return $this->belongsTo(intership::class);
    }
}
