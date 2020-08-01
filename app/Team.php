<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'full_name','email','degree', 'skill','image','project','view'
    ];

    protected $appends=['image_path'];

    public function getImagePathAttribute(){

        return asset('dashboard/uploads/team_image/'.$this->image);
    }
}
