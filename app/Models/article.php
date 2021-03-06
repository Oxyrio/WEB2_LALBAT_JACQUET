<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'user_id', 'title', 'description'
    ];
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function comments() {
        return $this->hasmany('App\Models\Comment');
    }
}


