<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function category(){
        $this->hasOne(Category::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }
}
