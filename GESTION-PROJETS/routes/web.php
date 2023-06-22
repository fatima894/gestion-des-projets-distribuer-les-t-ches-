<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('profile')->middleware('auth');
//Route::resource('/profile',[ProfileController::class]);
//Route::resource('tasks',[App\Http\Controllers\TaskController::class]); instead of al those  :
Route::put('profile/update',[App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
//taksk
Route::get('tasks/{id_prj}', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks')->middleware('auth');
Route::post('tasks/store/{id_prj}', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store')->middleware('abdelah');
Route::get('tasks/show/{id}', [App\Http\Controllers\TaskController::class, 'show'])->name('tasks.show')->middleware('auth');
Route::put('tasks/update/{id}', [App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update')->middleware('abdelah');
Route::put('tasks/update_status/{id}', [App\Http\Controllers\TaskController::class, 'update_status'])->name('tasks.update_status')->middleware('auth');
Route::get('tasks/destroy/{id}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('tasks.destroy')->middleware('abdelah');
Route::get('tasks/edit/{id}', [App\Http\Controllers\TaskController::class, 'edit'])->name('tasks.edit')->middleware('abdelah');
Route::get('tasks/create/{id_prj}', [App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create')->middleware('abdelah');

//proj
Route::get('/search', [App\Http\Controllers\ProjetController::class, 'search'])->middleware('auth');

Route::get('projets', [App\Http\Controllers\ProjetController::class, 'index'])->name('projets')->middleware('auth');
Route::post('projets/store', [App\Http\Controllers\ProjetController::class, 'store'])->name('projets.store')->middleware('abdelah');
Route::get('projets/show/{id}', [App\Http\Controllers\ProjetController::class, 'show'])->name('projets.show')->middleware('auth');
Route::get('projets/destroy/{id}', [App\Http\Controllers\ProjetController::class, 'destroy'])->name('projets.destroy')->middleware('abdelah');
Route::get('projets/{id}', [App\Http\Controllers\ProjetController::class, 'edit'])->name('projets.edit')->middleware('abdelah');
Route::get('/projets/create', [App\Http\Controllers\ProjetController::class, 'create'])->name('projets.create')->middleware('abdelah');




