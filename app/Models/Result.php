<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function student() {
        return belongsTo('App\Models\Student', 'id_student');
    }
}
