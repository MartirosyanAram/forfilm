<?php

namespace App\Http\Controllers;

use App\FilmModel;
use App\LikeModel;
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
     $likeArr=LikeModel::returnLike();
     $like=$likeArr[0]->like;
     $dislikeArr=LikeModel::returnDislike();
     $dislike=$dislikeArr[0]->dislike;
     return view('Film',compact('film','all','like','dislike'));
  }

}
