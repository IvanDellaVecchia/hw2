<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class RegisterController extends BaseController
{
    public function ShowRegistrazione(){
        if(Session::get('username')){
            Session::forget('errEmpty');
            Session::forget('errUser');
            Session::forget('errEmail');
            Session::forget('errPass');

            return redirect('home')
            ->with('csrf_token', csrf_token());
        }else{
            $errEmpty = Session::get('errEmpty');
            $errUser = Session::get('errUser');
            $errEmail = Session::get('errEmail');
            $errPass = Session::get('errPass');

            return view('registrazione')
            ->with('errEmpty', $errEmpty)
            ->with('errUser', $errUser)
            ->with('errEmail', $errEmail)
            ->with('errPass', $errPass);
        }
    }

    public function Errors(Request $data){
        $errors = array();
        Session::forget('errEmpty');
        Session::forget('errUser');
        Session::forget('errEmail');
        Session::forget('errPass');

        if($data->nome=='' || $data->cognome=='' || $data->email=='' || $data->username=='' || $data->password==''){
            $errors['empty'] = "Riempi tutti i campi";
            Session::put('errEmpty', "Riempi tutti i campi");
        }else{
    
            if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data->username)) {
                $errors['username'] = "Username non valido";
                Session::put('errUser', "Username non valido");
            } else {
                $username = User::where('username', $data->username)
                ->first();
                if ($username !== null) {
                    $errors['username'] = "Username già esistente";
                    Session::put('errUser', "Username già esistente");
                }
            }
        
            if (!filter_var($data->email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Email non valida";
                Session::put('errEmail', "Email non valida");
            } else {
                $email = User::where('email', $data->email)
                ->first();
                if ($email !== null) {
                    $errors['email'] = "Email già esistente";
                    Session::put('errEmail', "Email già esistente");
                }
            }
        
            if (strlen($data->password) < 8) {
                $errors['password'] = "Password non valida";
                Session::put('errPass', "Password non valida");
            } 
        }


        if(count($errors) == 0){
            $User = new User;
            $User -> name = $data -> nome;
            $User -> surname = $data -> cognome;
            $User -> email = $data -> email;
            $User -> username = $data -> username;
            $User -> password = $data -> password;
    
            if ($User) {
                Session::put('username', $User->username);
                $User->save();
                return redirect('home')
                ->with('csrf_token', csrf_token());
            } 
            else {
                return redirect('registrazione')
                ->withInput();
            }
        } else {
            
            return redirect('registrazione')
            ->withInput();
        }
     }

}

?>