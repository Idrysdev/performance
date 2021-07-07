<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\CourController;
use App\Http\Controllers\ChapitreController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ParentController;
use App\Models\Chapitre;
use App\Models\Cour;
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


Route::get('/test', function () {
    $cour = cour::all();
    return $cour[0]->chapitres[0]->lecons[0];
});

Route::get('/tests', function () {
    $cour = cour::all();
    return $cour[0]->objectifs[0]->libelle;
});




Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

// MODULE COURS
route::resource('niveau',NiveauController::class);
route::resource('classe',ClasseController::class);
route::resource('matiere',MatiereController::class);
route::resource('account',AccountController::class);

// DETAILS DE COURS
route::resource('cour',courController::class);
route::resource('chapitre',ChapitreController::class);
Route::post('/chapitre/{chapitre}/add_lecon', [App\Http\Controllers\ChapitreController::class, 'add_lecon'])->name('chapitre.add_lecon');
Route::get('/chapitre/{chapitre}/lecon/{lecon}/delete', [App\Http\Controllers\ChapitreController::class, 'dell_lecon'])->name('chapitre.lecon.delete');
Route::patch('/cour/{cour}/add_video', [App\Http\Controllers\CourController::class, 'add_video'])->name('cour.add_video');
Route::patch('/cour/{cour}/update_image', [App\Http\Controllers\CourController::class, 'update_image'])->name('cour.update_image');
Route::post('/cour/{cour}/add_chapitre', [App\Http\Controllers\CourController::class, 'add_chapitre'])->name('cour.add_chapitre');
Route::post('/cour/{cour}/add_objectif', [App\Http\Controllers\CourController::class, 'add_objectif'])->name('cour.add_objectif');
Route::get('/cour/{cour}/objectif/{objectif}/delete', [App\Http\Controllers\CourController::class, 'delete_objectif'])->name('cour.dell_objectif');
});


Route::get('/parents/register' ,  [App\Http\Controllers\PereController::class, 'register'])->name('parents.register');
Route::post('/parents/store' ,  [App\Http\Controllers\PereController::class, 'store'])->name('parents.store');
Route::get('/parents/login-page' ,  [App\Http\Controllers\PereController::class, 'loginPage'])->name('parents.login-page');
Route::post('/parents/login' ,  [App\Http\Controllers\PereController::class, 'login'])->name('parents.login');
Route::get('/parents/logout' ,  [App\Http\Controllers\PereController::class, 'logout'])->name('parents.logout')->middleware('pere');
Route::get('/parents' ,  [App\Http\Controllers\PereController::class, 'index'])->name('parents.index')->middleware('pere');



