<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Type extends Model
{
    protected $fillable = ['name'];

    public function TypeProject(){

        return $this->hasMany(Project::class);
    }
}
