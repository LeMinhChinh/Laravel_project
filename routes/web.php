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
    return redirect()->route('user.home');
});

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'Home'
], function () {
    Route::get('/','HomeController@home')->name('home');
});
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin'
], function(){
    Route::get('login','UserController@login')->name('login');
    Route::post('admin-login', 'UserController@handleLogin')->name('handleLogin');
    Route::post('admin-logout', 'UserController@handleLogout')->name('handleLogout');
    Route::get('register','UserController@register')->name('register');
    Route::post('admin-register','UserController@handleRegister')->name('handleRegister');
    Route::get('admin-logout','UserController@handleLogout')->name('handleLogout');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['web', 'check.admin.login']
], function(){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/posts','PostsController@index')->name('posts');
    Route::get('/create-post', 'PostsController@createPost')->name('createPost');
    Route::get('/category','CategoriesController@index')->name('category');
    Route::get('/tag','TagsController@index')->name('tag');
});
