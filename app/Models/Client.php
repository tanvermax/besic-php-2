<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;

class Client extends Model
{
    use HasFactory,SoftDeletes;


    // protected $fillable = ["name","email","password","bio","age"];
    protected $guarded = [];

    // #[Override]
    //  protected static function booted()
    //  {
    //      static::addGlobalScope('isAdult', function (Builder $builder) {
    //          $builder->where('age','>',35);
    //      });
    //  }

    public function scopeIsAdmin($query){
        $query->where('age','>',25)->IsAdminTwo();
    }

    public function scopeIsAdminTwo($query){
        $query->where('age','>',30);
    }
}
