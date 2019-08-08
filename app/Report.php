<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded =[];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function mood(){
        return $this->belongsTo(Mood::class);
    }

    public function participation(){
        return $this->belongsTo(Participation::class);
    }
}
