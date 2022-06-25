<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SearchUserController extends BaseController
{
    public function Show(){

        if(!Session::get('username')){
            return redirect('login');
        }

        return view('searchUser');
    }
    
}

?>