<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    protected $table='tasks';
    protected $fillable = [
        'project_id','date_delivre','user_id','status_id', 'priority_id','title', 'descreption' ];
       
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function status(){
        return $this->belongsTo('App\Models\Status','status_id');
    }
    public function priority(){
        return $this->belongsTo('App\Models\Priority','priority_id');}
        
        public function projet(){
        return $this->belongsTo('App\Models\Projet','project_id');
    }
}


