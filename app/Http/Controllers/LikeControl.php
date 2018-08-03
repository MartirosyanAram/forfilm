<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LikeModel;


class LikeControl extends Controller
{
    public function addAndReturnLike(){
       $likes=LikeModel::returnLike();
       $newLikes=$likes[0]->like+1;
       LikeModel::addLike($newLikes);
       return $newLikes;
    }

    public function addAndReturnDislike(){
      $dislikes=LikeModel::returnDislike();
      $newDislikes=$dislikes[0]->dislike+1;
      LikeModel:: addDislike($newDislikes);
      return $newDislikes;
    }
      public function  minusAndReturnLike(){
        $likes=LikeModel::returnLike();
        $newLikes=$likes[0]->like-1;
        LikeModel::addLike($newLikes);
        return $newLikes;
      }
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
