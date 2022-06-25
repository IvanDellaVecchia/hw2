<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $table = 'likes';
    protected $primaryKey = 'likes_id';
    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function Posts(){
        return $this->belongsTo('App\Models\Posts');
    }
}

?>