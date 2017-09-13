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

Route::get('login', 'LoginController@getLogin')->name('login');
Route::post('login', 'LoginController@postLogin')->name('logout');

Route::get('logout', 'LoginController@getLogout')->name('logout');

Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'admin'], function() {
		Route::get('/', function() {
			return redirect()->route('getUserList');
		});

		Route::group(['prefix' => 'categories', 'namespace' => 'Backend'],function() {
			Route::get('/', 'CategoriesController@getList');
			Route::get('create', 'CategoriesController@getCreate');
			Route::post('create', 'CategoriesController@store');
			Route::get('edit/{id}', 'CategoriesController@getEdit')->where('id', '[0-9]+')->name('getCatEdit');
			Route::post('edit/{id}', 'CategoriesController@postEdit')->where('id', '[0-9]+')->name('getCatDel');
			Route::get('delete/{id}', 'CategoriesController@getDelete')->where('id', '[0-9]+')->name('getCatDel');
			Route::get('list', 'CategoriesController@getList')->name('getCatList');
		});

		Route::group(['prefix' => 'news', 'namespace' => 'Backend'],function() {
			Route::get('/', 'NewsController@getList');
			Route::get('create', 'NewsController@getCreate');
			Route::post('create', 'NewsController@store');
			Route::get('edit/{id}', 'NewsController@getEdit')->where('id', '[0-9]+')->name('getNewEdit');
			Route::post('edit/{id}', 'NewsController@postEdit')->where('id', '[0-9]+');
			Route::get('delete/{id}', 'NewsController@getDelete')->where('id', '[0-9]+')->name('getNewDel');
			Route::get('list', 'NewsController@getList')->name('getNewList');
		});

		Route::group(['prefix' => 'users', 'namespace' => 'Backend'],function() {
			Route::get('/', 'UsersController@getList');
			Route::get('create', 'UsersController@getCreate');
			Route::post('create', 'UsersController@store');
			Route::get('edit/{id}', 'UsersController@getEdit')->where('id', '[0-9]+')->name('getUserEdit');
			Route::post('edit/{id}', 'UsersController@postEdit')->where('id', '[0-9]+');
			Route::get('delete/{id}', 'UsersController@getDelete')->where('id', '[0-9]+')->name('getUserDel');
			Route::get('list', 'UsersController@getList')->name('getUserList');
		});

	});
});


Route::group(['prefix' => '/', 'namespace' => 'Fontend'],function() {
	Route::get('/', 'HomeController@getIndex')->name('home');
	Route::get('categories/{id}', 'HomeController@getCategories')->name('categories');
	Route::get('detail/{id}', 'HomeController@getDetail')->name('detail');
});

