<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
   
    protected $fillable = [
       'title','descreption' ,'user_id' ];
       public function user(){
         return $this->belongsTo('App\Models\User','user_id');
     }
    }
