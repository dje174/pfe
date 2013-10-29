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

/* HOME 

Route::get('/', array('as' => 'home', function(){
    return View::make('home.index');
}));*/

Route::get('/', array('as' => 'myHome', function(){
    return View::make('home.myHome');
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

Route::get('/user/settings', array('as' => 'settings', function(){
    return View::make('user.settings');
}));//S'inscrire

Route::get('/user/profile', array('as' => 'profile', function(){
    return View::make('user.profile');
}));//Se connecter

Route::get('/user/friend', array('as' => 'friend', function(){
    return View::make('user.friend');
}));//Se connecter


/* CIRCLES */

Route::get('/my-circles', array('as' => 'myCircles', function(){
    return View::make('circles.myCircles');
}));

Route::get('/my-friends-circles', array('as' => 'myFriendsCircles', function(){
    return View::make('circles.myFriendsCircles');
}));

Route::get('/circle', array('as' => 'circle', function(){
    return View::make('circles.circle');
}));

/* ABOUT */

Route::get('/about', array('as' => 'about', function(){
    return View::make('about.index');
}));