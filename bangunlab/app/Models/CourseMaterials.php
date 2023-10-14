<?php

namespace App\Models;
use App\Models\Course;
use App\Models\VideoCourse;
use App\Models\OfflineCourse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMaterials extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course(){
        return $this->belongsTo(Courses::class,'course_id');
    }

    public function videos(){
        return $this->hasMany(VideoCourse::class,'material_id');
    }

    public function offline(){
        return $this->hasMany(OfflineCourse::class,'material_id');
    }

}
