<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class LikeModel extends Model
{
    public static function addLike($number){
      DB::table('likeanddislike')->where('id',1)->update(['like' => $number,]);
     }
     public static function addDislike($number){
       DB::table('likeanddislike')->where('id',1)->update(['dislike' => $number,]);
      }
    public static function returnLike(){
       return $liks = DB::table('likeanddislike')->select('like')->where('id',1)->get();
    }
    public static function returnDislike(){
       return $liks =  DB::table('likeanddislike')->select('dislike')->where('id',1)->get();
    }
}
