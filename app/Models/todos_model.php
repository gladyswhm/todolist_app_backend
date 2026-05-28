<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class todos_model extends Model
{
    protected $table = 'todos';
    protected $fillable = ['description','status','todolistID'];
    protected function todolist(){
        return $this->belongsto(todolist::class, 'todolistID');
    }
}
