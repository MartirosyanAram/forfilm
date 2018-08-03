<?php


Route::get('/','FilmControl@direction');
Route::get('film/{par}', 'FilmControl@cinema');

Route::post('/commented', 'ComentControl@addOtherComent');
Route::post('/user/commented', 'ComentControl@addUsersComent');
Route::post('/scrolling', 'ComentControl@scrolling');

Auth::routes();
Route::get('/home','HomeController@direction');
Route::get('/cinema/{par}','HomeController@cinema');
