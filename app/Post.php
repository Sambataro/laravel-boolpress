<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'sentence',
        'author'
    ];

    // DB relation

    public function InfoPost() {
        return $this-> hasOne('App\InfoPost');
    }
}
