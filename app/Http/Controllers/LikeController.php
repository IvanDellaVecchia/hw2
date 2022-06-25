<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Posts;
use App\Models\Likes;
use Illuminate\Support\Facades\Session;

class LikeController extends BaseController {

    public function AddLike($id){

        $user = Session::get('username');
        $Like = new Likes;
        $Like -> user = $user;
        $Like -> post = $id;
        $Like->save();
        
      $likes = Posts::find($id);
      return $likes;
    }

    public function RemoveLike($id){

        $likes = Likes::where('post', $id)
        ->where('user', Session::get('username'))
        ->first();
       
        $likes->delete();

        $likes = Posts::find($id);
        return $likes;

    }
}

?>