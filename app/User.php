<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use LaratrustUserTrait;
    use Notifiable;

    protected $fillable = [
        'first_name','last_name','email', 'password','image',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends=['image_path'];


    public function getFirstNameAttribute($value){

        return ucfirst($value);

    }

    public function getLastNameAttribute($value){

        return ucfirst($value);

    }

    public function getImagePathAttribute(){

        return asset('dashboard/uploads/users_image/'.$this->image);
    }



    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
