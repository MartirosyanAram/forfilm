<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmModel;
use App\LikeModel;
use App\Http\Controllers\ComentControl;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function direction() {
       $allFilms=FilmModel::films();
       return view('home',compact('allFilms'));
     }

     public function cinema($parametr) {
        $cinema=FilmModel::film($parametr);
        $offset=0;
        $limit=8;
        $all=ComentControl::returnComments($offset,$limit);
        $likeArr=LikeModel::returnLike();
        $like=$likeArr[0]->like;
        $dislikeArr=LikeModel::returnDislike();
        $dislike=$dislikeArr[0]->dislike;
        return view('homeCinema',compact('cinema','all','like','dislike'));
     }
}
