<?php

Route::resource('users', 'UserController');
Route::resource('addresses', 'AddressController');
Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController');

Route::get('/', function () {
    return view('welcome');
});
