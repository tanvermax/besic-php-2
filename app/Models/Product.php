<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = ['name','slug','price']; 
    
    
    public function comments()
    {
        // Ekhane 'commentable' holo oi prefix jeta database-er column-e ache (commentable_id, commentable_type)
        return $this->morphMany(Comments::class, 'commentable');
    }

     public static function booted()
    {
        static::created(function ($product) {
            info("i am from call back function,and product created {$product}");
        });
         static::deleted(function ($product) {
            info("i am from call back function,and product deleted");
        });
        static::updated(function ($product) {
            info("i am from call back function,and product updated");
        });

    }
}
