<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
    protected $guarded = [];

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
