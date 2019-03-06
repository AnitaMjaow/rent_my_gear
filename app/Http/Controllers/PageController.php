<?php
//Now we have a user registration/login system! 🥳

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class PageController extends Controller {

    public function welcome() {

        $msg = "some message";

        
        if (Auth::check()) {


            $user = Auth::user();

            //$user->id;

            $msg = "you are logged in as {$user->name}";
    }

    return view('welcome', ['msg => $msg ']);
    }

}