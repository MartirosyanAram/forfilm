<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComentModel;
use Illuminate\Support\Facades\Auth;

class ComentControl extends Controller
{

    public function addOtherComent(Request $request) {
        $com=$request->get('comment');
        ComentModel::addOtherComent($com);
        return $this->returnComment();
     }

    public function addUsersComent(Request $request) {
         $comment=$request->get('comment');
         $user = Auth::user();
         $username = 'Ancanot';
         if ($user) {
           $username = $user->login;
         }
         ComentModel::addUsersComent($comment, $username);
         return $this->returnComment();
     }

     public static  function returnComments($offset,$limit) {
        return  $allComments = ComentModel::returnComments($offset,$limit);
        }

      public  function scrolling(Request $request) {
           $offset=$request->get('offset');
           $limit=8;
           return  $allComments = ComentModel::returnComments($offset,$limit);
           }

      public  function returnComment() {
          return  $allComments = ComentModel::returnComment();
         }

}
