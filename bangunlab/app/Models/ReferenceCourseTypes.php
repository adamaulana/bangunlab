<?php

namespace App\Models;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceCourseTypes extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function course(){
        return $this->hasOne(Course::class,'course_type');
    }
}
