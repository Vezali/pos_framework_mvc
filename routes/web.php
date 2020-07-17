<?php

use App\Http\Controllers\AreaControler;
use App\Models\area;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/areas', 'AreaControler@index');
//Route::get('/areas/create', 'AreaControler@create');
Route::resource('areas', 'AreaControler')->except('show');

Route::resource('studies', 'StudyController')
    ->except('show');

        ## get - retornar um dado.
        ## post - postar um dado
        ## put - atualizar um dado.
        ## delete - excluir um dado.
Route::resource('dashboards', 'DashboardController');