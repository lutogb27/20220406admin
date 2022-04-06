<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name', 'name-kana','age' ,'address', 'zipcode','gender', 'body'
    ];

    static $genders = [
        '男', '女'
    ];
}
