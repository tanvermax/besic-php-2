<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Events\UserCreatedEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $with=[
    protected $dispatchesEvents = [
        "created" => UserCreatedEvent::class
    ];
    // 'info'
    // ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function info():HasOne
    // {
    //     return $this->hasOne(info::class,'user_id','id');
    // }


    public function info()
    {
        return $this->morphOne(Info::class, "infoable");
    }


    public function posts(): HasMany
    {
        return $this->hasMany(post::class);
    }

    public function skilss()
    {
        return $this->belongsToMany(Skill::class, 'skill_users');
    }

    public static function booted()
    {
        static::created(function ($user) {
            info("i am from call back function");
        });
    }
}
