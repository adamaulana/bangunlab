<?php

namespace App\Models;
use App\Models\Courses;
use App\Models\Roadmap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepRoadmap extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }

    
}
