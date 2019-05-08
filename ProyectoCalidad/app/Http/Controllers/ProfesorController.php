<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    
    function index(){
        return view('profesor/home_profesor');
    }
}
