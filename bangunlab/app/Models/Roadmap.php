<?php

namespace App\Models;
use App\Models\StepRoadmap;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function step(){
        return $this->hasMany(StepRoadmap::class, 'roadmap_id');
    }
}
