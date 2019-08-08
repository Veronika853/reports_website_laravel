<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function uni(){
        return $this->belongsTo(Uni::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }

}
