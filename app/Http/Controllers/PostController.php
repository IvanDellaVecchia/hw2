<?php



namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Posts;
use App\Models\Likes;
use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController{

    public function ShowPosts(){
        $posts = Posts::join('users', 'users.username', '=', 'Posts.user')
        ->get();

        return $posts;
    }

    public function Likes(){
        $likes = Likes::where('user', Session::get('username'))
        ->get();
        return $likes;
    }

    public function personalPosts($value){

        if($value){
            $posts = Posts::join('users', 'users.username', '=', 'Posts.user')
            ->where('username', $value)
            ->get();
        }else{
            $posts = Posts::join('users', 'users.username', '=', 'Posts.user')
            ->where('username', Session::get('username'))
            ->get();
        }
        
        return $posts;
    }

    public function eliminaPost($id){
        $post = Posts::where('id', $id)->delete();
    }
}


?>