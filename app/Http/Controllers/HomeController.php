<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // el methodo __invoke solo es cuando hay una ruta si hay mas no se usa
    public function __invoke(){
        return view("home");
    }
}
