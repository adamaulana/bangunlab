<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class User extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'email',
        'name',
        'password',
        'nik',
        'level',
        'address',
        'status',
        'phone',
        'verify_code'
    ];
    
    public function survey_code(){
        return $this->hasOne(SurveyCode::class,'user_id');
    }
}
