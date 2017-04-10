<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/showcase', 'PagesController@Showcase');
Route::get('/skills', 'PagesController@Skills');
Route::get('journey', 'PagesController@Journey');
Route::get('resume', 'PagesController@Resume');

Route::get('showcase/dataMigration', 'PagesController@DataMig');
Route::get('showcase/foodFight', 'PagesController@FoodFight');
Route::get('showcase/stack', 'PagesController@StackTheBoxes');
Route::get('showcase/tunnelBird', 'PagesController@TunnelBird');
Route::get('showcase/nsccapp', 'PagesController@NsccApp');
Route::get('showcase/nsccerd', 'PagesController@Erd');