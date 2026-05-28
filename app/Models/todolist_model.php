<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class todolist_model extends Model
{
    protected $table = 'todolist';
    protected $fillable = ['titlename'];
    public function todos()
    {
        return $this->hasMany(Todo::class, 'todolistID'); //relationship: one list has many to do items
    }
}
