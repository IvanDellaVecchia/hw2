<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function ShowHome(){

        if(!Session::get('username')){
            return redirect('login');
        }

        return view('home');
    }
    
}

?>