<?php

//guest
Route::get('/','FilmControl@direction');
Route::get('film/{par}', 'FilmControl@cinema');

//comnet and scroll
Route::post('/commented', 'ComentControl@addOtherComent');
Route::post('/user/commented', 'ComentControl@addUsersComent');
Route::post('/scrolling', 'ComentControl@scrolling');

//like and dislike
Route::put('/plus/like', 'LikeControl@plusAndReturnLike');
Route::put('/minus/like', 'LikeControl@minusAndReturnLike');
Route::put('/plus/dislike', 'LikeControl@plusAndReturnDislike');
Route::put('/minus/dislike', 'LikeControl@minusAndReturnDislike');
Route::put('/back/like', 'LikeControl@backLike');
Route::put('/back/dislike', 'LikeControl@backDislike');

//autorizacia
Auth::routes();
Route::get('/home','HomeController@direction');
Route::get('/cinema/{par}','HomeController@cinema');
