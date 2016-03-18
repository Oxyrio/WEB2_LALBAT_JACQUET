<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::ressource('/articles','ArticleController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

    // Ici, toutes les routes permettant de diriger et rediriger vers les différentes pages

    Route::auth();



    Route::get('/', function () {
        return view('welcome');
    });



    Route::get('/home', 'HomeController@index');





    Route::get('/profil', function () {
        return view ('profil.show');
    }) ;

    Route::get('/profil', function () {
        // return view ('profil.update');
    }) ;

    Route::get('/edit', function () {
        return view ('profil.edit');
    }) ;

    Route::get('/profil/change_password', function () {
        return view ('profil.edit_password');
    }) ;

    Route::get('/profil/change_password', function () {
        return view ('profil.update_password');
    }) ;


    Route::resource('/projets', 'ProjetController');

});