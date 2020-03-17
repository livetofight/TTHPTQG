<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['id','username','fullname','gender','namsinh','cmnd','list_subject','created_at','updated_at'];
}
