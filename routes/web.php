<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index');
Route::get('/admin/datadosen', 'DosenController@index');

Route::get('/admin/datadosen/tambahdosen', 'AdminController@tambahdosen');
Route::get('/admin/datadosen/updatedosen/{nip}', 'AdminController@updatedosen');
Route::put('/admin/datadosen/updatedosen/update/{nip}', 'AdminController@update');
Route::get('/admin/datadosen/hapusdosen/{nip}', 'AdminController@hapusdosen');
Route::post('/admin/datadosen/tambahdosen/simpan', 'AdminController@simpan');
