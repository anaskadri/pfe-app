<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horaires extends Model
{
    protected $fillable = ['heure_debut','heure_fin'];

    public function absence()
    {
        return $this->hasMany('App\absences');
    }
}
