<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* HOME */

Route::get('/', array('as' => 'home', function(){
    return View::make('home.index');
}));


/* USERS */

Route::get('/user/show', array('as' => 'showUser', function(){
    return View::make('user.show');
}));
//Voir l'utilisateur

Route::get('/users', array('as' => 'listUsers', function(){
    return View::make('user.index');
}));
//Voir la liste des utilisateurs

Route::get('/user/register', array('as' => 'register', function(){
    return View::make('user.register');
}));


/* CIRCLES */

Route::get('/circles', array('as' => 'circles', function(){
    return View::make('circles.index');
}));

/* ABOUT */

Route::get('/about', array('as' => 'about', function(){
    return View::make('about.index');
}));