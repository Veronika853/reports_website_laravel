<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];

    public function reports(){
        return $this->hasMany(Report::class);
    }

}
