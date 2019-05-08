<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    function index(){
        return view('alumno/home_alumno');
    }
}
