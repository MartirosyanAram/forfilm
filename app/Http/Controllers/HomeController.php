<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmModel;
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
        return view('homeCinema',compact('cinema'));
     }
}
