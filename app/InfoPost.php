<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPost extends Model
{
    public $timestamps = false;

    // DB relation

    public function post() {
        return $this->belongsTo('App\Post');
    }
}
