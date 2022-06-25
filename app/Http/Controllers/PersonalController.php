<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Likes;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PersonalController extends BaseController
{
    public function ShowPersonal(){

        if(!Session::get('username')){
            Session::forget('errPro');
            return redirect('login');
        }else{
            $errPro = Session::get('errPro');
            return view('personal')
            ->with('errPro', $errPro);
        }

    }

    public function ProfileForm(Request $request){

        $errors = array();
        Session::forget('errPro');
        if(isset($_FILES['profileImg'])){
            $file = $_FILES['profileImg'];
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
                        Session::put('errPro', "L'immagine non deve avere dimensioni maggiori di 7MB");
                    }
                } else {
                    $errors['img'] = "Errore nel carimento del file";
                    Session::put('errPro', "Errore nel carimento del file");
                }
            } else {
                $errors['img'] = "I formati consentiti sono .png, .jpeg, .jpg e .gif";
                Session::put('errPro', "I formati consentiti sono .png, .jpeg, .jpg e .gif");
            }

            if(count($errors) == 0){

                $Profile = User::find(Session::get('username'));
                $Profile->profile = 'DataImage/'.$fileNameNew;

                if ($Profile) {
                    $Profile->save();
                    return redirect('personal');
                } 
                else {
                    return redirect('personal')
                    ->withInput();
                }
            }else{
                return redirect('personal');
            }
        }else{
            return redirect('personal');
        }

    }    

    public function checkUser($id){
        if($id){
            $user = USER::where('username', $id)
            ->get();
        } else {
            $user = USER::where('username', Session::get('username'))
            ->first();
        }

        return $user;
    }

    public function eliminaUtente(){
        $likes = Likes::where('user', Session::get('username'))->delete();
        $user = User::where('username', Session::get('username'))->delete();
        Session::flush();
        return redirect('login');
    }

}
?>