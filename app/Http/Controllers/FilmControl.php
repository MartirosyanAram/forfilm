<?php

namespace App\Http\Controllers;

use App\FilmModel;
use App\Http\Controllers\ComentControl;
class FilmControl extends Controller
{
  public function direction() {
    $allFilms=FilmModel::films();
    return view('Film1',compact('allFilms'));
  }


  public function cinema($parametr) {
     $film=FilmModel::film($parametr);
     $offset=0;
     $limit=8;
     $all=ComentControl::returnComments($offset,$limit);
     return view('Film',compact('film','all'));
  }

}
