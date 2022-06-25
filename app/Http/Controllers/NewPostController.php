<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Posts;
use App\Models\Likes;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class NewPostController extends BaseController
{
    public function Show(){

        if(!Session::get('username')){
            Session::forget('errImg');
            return redirect('login');
        }else{
            $errImg = Session::get('errImg');
            return view('newpost')
            ->with('errImg', $errImg);
        }

    }



    public function Create(Request $request){
        $errors = array();
        $description = $request->description;
        Session::forget('errImg');
        if(isset($_FILES['postImg'])){
            $file = $_FILES['postImg'];
            $type = exif_imagetype($file['tmp_name']);
            $allowedExt = array(IMAGETYPE_PNG => 'png', IMAGETYPE_JPEG => 'jpg', IMAGETYPE_GIF => 'gif');
            if (isset($allowedExt[$type])) {
                if ($file['error'] === 0) {
                    if ($file['size'] < 7000000) {
                        $fileNameNew = uniqid('', true).".".$allowedExt[$type];
                        $fileDestination = '../public/immagini/DataImage/'.$fileNameNew;
                        move_uploaded_file($file['tmp_name'], $fileDestination);
                    } else {
                        $errors['img'] = "L'immagine non deve avere dimensioni maggiori di 7MB";
                        Session::put('errImg', "L'immagine non deve avere dimensioni maggiori di 7MB");
                    }
                } else {
                    $errors['img'] = "Errore nel carimento del file";
                    Session::put('errImg', "Errore nel carimento del file");
                }
            } else {
                $errors['img'] = "I formati consentiti sono .png, .jpeg, .jpg e .gif";
                Session::put('errImg', "I formati consentiti sono .png, .jpeg, .jpg e .gif");
            }

            if(count($errors) == 0){

                $Post = new Posts;
                $Post->user = Session::get('username');
                $Post->image = 'DataImage/'.$fileNameNew;
                $Post->description = $description;

                if ($Post) {
                    $Post->save();
                    return redirect('home');
                } 
                else {
                    return redirect('newpost')
                    ->withInput();
                }
            }else{
                return redirect('newpost');
            }
        }else{
            return redirect('newpost');
        }

    }

}


?>