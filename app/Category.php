<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function tasks(){
        $this->hasMany(Task::class);
    }
}
