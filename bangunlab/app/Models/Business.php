<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function addresses(){
        return $this->morphMany(Address::class,'addressable');
    }
}
