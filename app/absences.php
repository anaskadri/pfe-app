<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absences extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function horaire()
    {
        return $this->belongsTo('App\horaires');
    }

    public function module()
    {
        return $this->belongsTo('App\modules');
    }
    
}
