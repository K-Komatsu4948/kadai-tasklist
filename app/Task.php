<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['content'];
    
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
