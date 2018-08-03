<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FilmModel extends Model
{
  public static function films() {
      return  $films= DB::table('film_models')->paginate(5);
          }

  public static function film($id) {
     return $film=DB::table('film_models')->select('images','comment','name')->where('id',$id)->get();
           }
   public $timestamps = false;
}
