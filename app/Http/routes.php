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

    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index');

    Route::get('/edit_profil', [
        'middleware' => 'auth',
        'as' => 'profil.show',
        'uses' => 'ProfilController@show'
    ]);

    Route::put('/edit_profil', [
        'middleware' => 'auth',
        'as' => 'profil.update',
        'uses' => 'ProfilController@edit'
    ]);

    Route::get('/edit', [
        'middleware' => 'auth',
        'as' => 'edit_profil.edit',
        'uses' => 'ProfilController@edit'
    ]);

    Route::get('/edit_profil/change_password', [
        'middleware' => 'auth',
        'as' => 'profil.edit_password',
        'uses' => 'ProfilController@edit_password'
    ]);

    Route::put('/edit_profil/change_password',[
        'middleware' => 'auth',
        'as' => 'profil.update_password',
        'uses' => 'ProfilController@update_password'
    ]);

    Route::resource('/projets', 'ProjetController');

});




