<?php

namespace App\Models;
use App\Models\ReferenceCourseTypes;
use App\Models\StepRoadmap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function type(){
        return $this->belongsTo(ReferenceCourseTypes::class,'course_type');
    }

    public function step_roadmap(){
        return $this->hasMany(StepRoadmap::class,'course_id');
    }

    public function material(){
        return $this->hasMany(CourseMaterials::class,'course_id');
    }
}
