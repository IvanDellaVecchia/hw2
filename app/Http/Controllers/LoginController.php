<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function ShowLogin(){
        if(Session::get('username')){
            Session::forget('error');

            return redirect('home')
            ->with('csrf_token', csrf_token());
        }else{
            $error = Session::get('error');

            return view('login')
            ->with('error', $error);
        }
    }

    public function AvviaLogin(){
        $user = User::where('username', request('username'))
        ->where('password', request('password'))
        ->first();

        if(request('username')=='' || request('password')==''){
            Session::put('error', 'error1');
            return redirect('login')
            ->withInput();
        }
        if($user){
            Session::put('username', $user->username);
            return redirect('home')
            ->with('csrf_token', csrf_token());
        } else {
            Session::put('error', 'error2');
            return redirect('login')
            ->withInput();
        }
    }

    
    public function Logout(){
        Session::flush();
        return redirect('login');
    }

}

?>
