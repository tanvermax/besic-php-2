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
}
