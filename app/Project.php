<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;
use App\Team;

class Project extends Model
{
    protected $fillable = ['type_id','team_id','name','lang','description','image','view','link'];

    public function getImagePathAttribute(){

        return asset('dashboard/uploads/project_image/'.$this->image);
    }

    public function projectType(){

        return $this->belongsTo(Type::class,'type_id');
    }

    public function projectTeam(){
        return $this->belongsTo(Team::class,'team_id');
    }
}
