<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ComentModel extends Model
{
    public static function addOtherComent($coment) {
          DB::table('comments')->insert(
          ['comment' => $coment, 'user' => 'ancanot',]
                                 );
      }

    public static function addUsersComent($comment,$user){
        DB::table('comments')->insert(
        ['comment' => $comment, 'user' => $user]
                              );
      }

    public static function returnComments($offset,$limit){
      return $comments =  DB::table('comments')->orderBy('id', 'desc')->offset($offset)
                ->limit($limit)
                ->get();
      }
      public static function returnComment(){
        return $comments =  DB::table('comments')->orderBy('id', 'desc')->get();
        }

}
