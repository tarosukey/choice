<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function theme()
    {
        return $this->belongsTo('App\Theme');
    }
}