<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name1',
        'gender',
        'email',
        'post_code',
        'address',
        'building_name',
        'content'
    ];
}