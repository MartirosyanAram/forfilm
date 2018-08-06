<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LikeModel;


class LikeControl extends Controller
{

///for like +/-
    public function plusAndReturnLike(){
       $likes=LikeModel::returnLike();
       $newLikes=$likes[0]->like+1;
       LikeModel::addLike($newLikes);
       return $newLikes;
    }
      public function  minusAndReturnLike(){
        $likes=LikeModel::returnLike();
        $newLikes=$likes[0]->like-1;
        LikeModel::addLike($newLikes);
        return $newLikes;
      }


//for dislike +/-
      public function plusAndReturnDislike(){
        $dislikes=LikeModel::returnDislike();
        $newDislikes=$dislikes[0]->dislike+1;
        LikeModel:: addDislike($newDislikes);
        return $newDislikes;
      }
      public function minusAndReturnDislike(){
        $dislikes=LikeModel::returnDislike();
        $newDislikes=$dislikes[0]->dislike-1;
        LikeModel:: addDislike($newDislikes);
        return $newDislikes;
      }

//for like/dislike back
    public function backLike(){
      $likes=LikeModel::returnLike();
      $newLikes=$likes[0]->like-1;
      LikeModel::addLike($newLikes);
      $dislikes=LikeModel::returnDislike();
      $newDislikes=$dislikes[0]->dislike+1;
      LikeModel:: addDislike($newDislikes);
      $likeAndDislike=[$newLikes,$newDislikes];
      return  $likeAndDislike;
    }
    public function backDislike(){
      $likes=LikeModel::returnLike();
      $newLikes=$likes[0]->like+1;
      LikeModel::addLike($newLikes);
      $dislikes=LikeModel::returnDislike();
      $newDislikes=$dislikes[0]->dislike-1;
      LikeModel:: addDislike($newDislikes);
      $likeAndDislike=[$newLikes,$newDislikes];
      return  $likeAndDislike;
    }

}
