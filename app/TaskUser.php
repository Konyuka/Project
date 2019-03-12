<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    //
    protected $fillable = [
        'task_id',
        'user_id',
    ];


    public function user(){
		return $this->belongsTo('App\User');
    }

    public function task(){
		return $this->hasMany('App\Task');
    }

}
