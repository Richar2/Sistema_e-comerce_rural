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
/* 
Route::get('/', 'Subscription_plan\Subscription_planController@home' );
Route::get('/user', 'Subscription_plan\Subscription_planController@user' )->name('user');
Route::get('/planos_de_assinatura', 'Subscription_plan\Subscription_planController@planos' )->name('planos');
Route::get('/novo_anuncio', 'Subscription_plan\Subscription_planController@anuncio' )->name('anuncio');
*/
Route::get('/', 'Sisten_site\UsersController@create_user' );
Route::post('/save', 'Sisten_site\UsersController@save_user')->name('profile.save_user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
