<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhachhangsController extends Controller
{
    //

    public function index(){
    	return view('UI.trangchu.register');
    }

    public function store(){
    	echo "oke";
    }


    public function showLoginForm(){
    	return view('UI.trangchu.login');
    }
}
