<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table='profile_users';
    protected $fillable = [
        'grade','user_id','bio', 'gender' ];
    public function user(){
        return $this->belongs('App\Models\User','user_id');
    }
}
