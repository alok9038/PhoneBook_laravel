<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function getNameAttribute($value){
        return "Mr. ".($value);
    }
    public function getContactAttribute($value){
        return "+91 ".($value);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = strtoupper($value);
    }
}
