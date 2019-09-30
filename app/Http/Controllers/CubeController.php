<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CubeController extends Controller
{
    public function getCubes(){


      return view('cubes');
    }
}
