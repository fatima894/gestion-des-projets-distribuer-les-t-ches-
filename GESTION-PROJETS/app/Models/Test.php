<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'age','gender'
    ];
}
