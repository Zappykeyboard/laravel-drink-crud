<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;


class CubeController extends Controller
{
    public function getCubes(){

      $values = Drink::all();
      $min = $values->min('prezzo');
      $max = $values->max('prezzo');
      $avg = $values->avg('prezzo');


      return view('cubes', compact('values', 'min', 'max','avg'));
    }
}
