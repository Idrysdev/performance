<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\CourController;
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
    return view('index');
});



Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
route::resource('niveau',NiveauController::class);
route::resource('classe',ClasseController::class);
route::resource('matiere',MatiereController::class);


    });
route::resource('cour',courController::class);
Route::patch('/cour/{cour}/add_video', [App\Http\Controllers\CourController::class, 'add_video'])->name('cour.add_video');
Route::patch('/cour/{cour}/update_video', [App\Http\Controllers\CourController::class, 'update_image'])->name('cour.update_image');
Route::post('/cour/{cour}/add_chapitre', [App\Http\Controllers\CourController::class, 'add_chapitre'])->name('cour.add_chapitre');


