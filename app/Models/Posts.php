<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function Likes(){
        return $this->hasMany('App\Models\Likes', 'post');
    }
}

?>