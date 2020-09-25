<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modules extends Model
{
    protected $fillable = ['libelle_module'];

    public function absence()
    {
        return $this->hasMany('App\absences');
    }
}
