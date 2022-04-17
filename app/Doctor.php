<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name', 'image', 'contact', 'nid', 'degree', 'sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri','category_id','user_id'
    ];
}
