<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfflineCourse extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function material(){
        return $this->belongsTo(CourseMaterials::class,'material_id');
    }
}
