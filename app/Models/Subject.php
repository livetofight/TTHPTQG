<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = FALSE;
    protected $dateFormat = 'd-m-Y';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    protected $fillable = [
        'id', 'name', 'created_at', 'updated_at',
    ];
}
