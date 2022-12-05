<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //RETORNO AL MENU
    public function index()
    {
        return view('menu/index');
    }
}
 