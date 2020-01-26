<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/register', 'ViewsController@register')->name('register');
// Route::get('/login', 'ViewsController@login')->name('login');

Route::group(['prefix' => 'projects'], function () {
    Route::get('/', [
        'uses' => 'ProjectController@index',
        'as'   => 'project.index'
    ]);

    Route::get('/{id}', [
        'uses' => 'ProjectController@show',
        'as'   => 'project.show'
    ]);

    Route::get('/{id}/edit', [
        'uses' => 'ProjectController@edit',
        'as'   => 'project.edit'
    ]);

    Route::post('/store', [
        'uses' => 'ProjectController@store',
        'as'   => 'project.store'
    ]);

    Route::match(['post', 'get'], '/update/{id}', [
        'uses' => 'ProjectController@edit',
        'as'   => 'project.edit'
    ]);

    Route::match(['post', 'get'], '/delete/{id}', [
        'uses' => 'ProjectController@destroy',
        'as'   => 'project.destroy'
    ]);

    Route::get('test/{id}', 'ProjectController@getUserProjects');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
