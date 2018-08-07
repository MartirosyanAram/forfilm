<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmModel;
use App\LikeModel;
use App\Http\Controllers\ComentControl;
use Alaouy\Youtube\Facades\Youtube;
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
        $treiler=$this->you($cinema[0]->name);
        return view('homeCinema',compact('cinema','treiler','all','like','dislike'));
     }

     public function you($name){
            $results=Youtube::searchVideos($name.' oficial treiler');
            return $results[0]->id->videoId;
       }
}
