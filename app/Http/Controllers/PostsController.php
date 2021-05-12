<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function postData(Request $req)
    {
       $fname = $req -> input('fname');
       $lname = $req -> input('lname');
       $userinfo = array($fname,$lname);

    
        return view('user_submit',['userdata'=>$userinfo]);
    }
}
