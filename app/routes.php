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
}));//accueil quand non connecté

Route::get('home', array('before' => 'auth', 'as' => 'myHome', function(){
    return View::make('home.myHome');
}));//Accueil utilisateur

/* USERS */

Route::get('/user/show', array('as' => 'showUser', function(){
    return View::make('user.show');
}));
//Voir l'utilisateur

Route::get('/users', array('as' => 'listUsers', function(){
    return View::make('user.index');
}));
//Voir la liste des utilisateurs

Route::get('/user/settings', array('before' => 'auth', 'as' => 'settings', function(){
    return View::make('user.settings');
}));//Paramètres

Route::get('/user/profile', array('before' => 'auth', 'as' => 'profile', function(){
    return View::make('user.profile');
}));//profil utilisateur

Route::get('friend', array('before' => 'auth', 'as' => 'friend', function(){
    return View::make('user.friend');
}));//page d'un ami

Route::get('register', array('as' => 'register', function(){
    return View::make('user.register');
}));//S'inscrire quand non connecté

/* CIRCLES */

Route::get('/my-circles', array('before' => 'auth', 'as' => 'myCircles', function(){
    return View::make('circles.myCircles');
}));

Route::get('/my-friends-circles', array('before' => 'auth', 'as' => 'myFriendsCircles', function(){
    return View::make('circles.myFriendsCircles');
}));

Route::get('/circle', array('as' => 'circle', function(){
    return View::make('circles.circle');
}));

Route::get('/circles', array('as' => 'circles', function(){
    return View::make('circles.index');
}));//page explicative des cercles quand non connecté

/* ABOUT */

Route::get('/about', array('as' => 'about', function(){
    return View::make('about.index');
}));//page about quand non connecté

/* CONNEXION */

Route::get('login', array('as' => 'login', function(){
    return View::make('user.login');
}));//Se connecter

Route::post('user/connect',function(){
    if(Auth::attempt(array('email' =>Input::get('email'),'pwd'=>Input::get('pwd')))){
        return Redirect::intended('home');//tu vas sur la page sur laquelle tu essayais d'aller
    }
    else{
        return Redirect::to('user/connect');
    }
});