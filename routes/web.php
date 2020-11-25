<?php

// use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

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
Route::get('/', 'BlogController@index');
Route::get('/blog/{title}', 'BlogController@single');
// Route::get('/', function () {
    // simpan key ke memory selamanya
    // Cache::forever('key', $value);
    // melupakan memory
    // Cache::forget('key');
    // menghapus semua key
    // Cache::flush();
    // Cache::put('username', 'fitra', 5);
    // dd(Cache::get('usernames','404 Not found'));
    // Cache::increment('visited', 1);
    // return 'Visited '.Cache::get('visited').'x times';
    // if (Cache::has('username')) {
    //     return Cache::get('username');
    // }else{
    //     return abort(404);
    // }
// });
