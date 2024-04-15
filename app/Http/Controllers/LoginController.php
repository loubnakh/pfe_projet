<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function show($type)
    {
        return view('auth.login', ['type' => $type]);
    }


    public function index()
    {
        //
    }

   
    
}