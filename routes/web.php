<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\App;

App::setLocale('es');

Route::view('/', 'home')->name('home');

Route::get('/about', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/about/profile', [ProfileController::class, 'indexCompany'])->name('profile.index_company');
Route::post('/about', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/about/create', [ProfileController::class, 'create'])->name('profile.create');
Route::get('/about/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/about/edit', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/about', [ProfileController::class, 'delete'])->name('profile.delete');

Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
Route::post('/portfolio', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/portfolio/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/portfolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/portfolio/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/portfolio/{project}', [ProjectController::class, 'delete'])->name('projects.delete');

Route::get('/portfolio/{project}', [ProjectController::class, 'show'])->name('projects.show');

//Route::view('/contact', 'contact')->name('contact');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('messages.store');
Auth::routes();