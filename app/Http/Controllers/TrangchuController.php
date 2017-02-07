<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\Request;

use App\Http\Requests;

class TrangchuController extends Controller
{
    public  function  index(){
        return view('UI.trangchu.index');
    }
    public function __construct()
    {
        $this->middleware('member');

    }
    public function show($id){

        return $id;
    }

    public function showFormLogin(){
        return view('UI.trangchu.login');
    }
}
