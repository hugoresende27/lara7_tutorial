<?php

use App\Http\Controllers;
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

Route::get('/sample/{id}', function ($id) {
    echo $id;
    return view('sample', ['name'=>'xx']);
});

Route::view('/sampleB','sample', ['name'=>'sample B']);
Route::view('/example','example',['x'=>69]);

Route::resource('/users', UsersController::class);

Route::view('submitform','user', ['name'=>'submit lesson']);

//Route::get('usercontroller', 'UsersController@store');

