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
});

Route::get('/slide-one', function () {
    return view ('slides.one');
});
Route::get('/slide-two', function () {
    return view ('slides.two');
});
Route::get('/slide-three', function () {
    return view ('slides.three');
});
Route::get('/slide-four', function () {
    return view ('slides.four');
});

Route::get('/one', function () {
    return view ('forms.one');
});
Route::post('/one', 'FormOneController@store')->name('form-one');

Route::get('/two', function () {
    return view ('forms.two');
});
Route::post('/two', 'FormTwoController@store')->name('form-two');

Route::get('/three', function () {
    return view ('forms.three');
});
Route::post('/three', 'FormThreeController@store')->name('form-three');

Route::get('/four', function () {
    return view ('forms.four');
});
Route::post('/four', 'FormFourController@store')->name('form-four');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
