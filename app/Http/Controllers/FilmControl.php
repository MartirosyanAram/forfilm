<?php

namespace App\Http\Controllers;

use App\FilmModel;

class FilmControl extends Controller
{
  public function direction() {
    $allFilms=FilmModel::films();
    return view('Film1',compact('allFilms'));
  }


  public function cinema($parametr) {
     $film=FilmModel::film($parametr);
     return view('Film',compact('film'));
  }

}
