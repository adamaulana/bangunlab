<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferencesSurvey extends Model
{
    use HasFactory;
    
    protected $guarded  = [];
    
    public function survey_code(){
        return $this->hasOne(SurveyCode::class,'survey_id');
    }
}
