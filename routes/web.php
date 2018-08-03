<?php


Route::get('/','FilmControl@direction');
Route::get('film/{par}', 'FilmControl@cinema');

Route::post('/commented', 'ComentControl@addOtherComent');
Route::post('/user/commented', 'ComentControl@addUsersComent');
Route::post('/scrolling', 'ComentControl@scrolling');
Route::post('/plus/like', 'LikeControl@addAndReturnLike');
Route::post('/minus/like', 'LikeControl@minusAndReturnLike');
Route::post('/dislike', 'LikeControl@addAndReturnDislike');
Route::post('/back/like', 'LikeControl@backLike');
Route::post('/back/dislike', 'LikeControl@backDislike');

Auth::routes();
Route::get('/home','HomeController@direction');
Route::get('/cinema/{par}','HomeController@cinema');
