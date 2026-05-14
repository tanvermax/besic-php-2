<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function thana(){
        return $this->hasOneThrough(Thana::class,
        Distric::class,"division_id",
        "district_id");
    }
    public function thanas(){
        return $this->hasManyThrough(Thana::class,
        Distric::class,"division_id",
        "district_id");
    }
}
