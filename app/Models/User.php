<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'username';
    protected $autoIncrement = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function Posts(){
        return $this->hasMany('App\Models\Posts', 'user');
    }

    public function Likes(){
        return $this->hasMany('App\Models\Likes',  'user');
    }

}

?>