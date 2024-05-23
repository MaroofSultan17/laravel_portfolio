<?php

use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\backend\AdminSignupController;
use App\Http\Controllers\backend\AdminWorksController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ResumeController;
use App\Http\Controllers\frontend\WorksController;
use Illuminate\Support\Facades\Route;


#Frontend
Route::get('/', [HomeController::class, 'index'])->name('home.maroof');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume.maroof');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.maroof');
Route::get('/works', [WorksController::class, 'index'])->name('works.maroof');
Route::post('/contact', [ContactController::class, 'contactsubmit'])->name('contact.submit');


#Backend
Route::get('/admin', [AdminHomeController::class, 'index'])->name('login');
Route::post('/admin', [AdminHomeController::class, 'login'])->name('login.valid');
Route::get('/admin/logout', [AdminHomeController::class, 'logout'])->name('logout');
Route::get('/admin/home', [AdminHomeController::class, 'home'])->name('dashboard.show');
Route::get('/asmin/signup', [AdminSignupController::class, 'index'])->name('signup.show');
Route::post('/admin/signup', [AdminSignupController::class, 'register'])->name('signup.register');
Route::get('/admin/works', [AdminWorksController::class, 'index'])->name('works.show');
Route::get('/admin/works/add', [AdminWorksController::class, 'add_works'])->name('works_add.show');
Route::post('/admin/works/add', [AdminWorksController::class, 'register_works'])->name('works_add.submit');
Route::get('/admin/works/edit/{id}', [AdminWorksController::class, 'edit_works_show'])->name('works_edit.show');
Route::put('/admin/works/update/{id}', [AdminWorksController::class, 'update_works'])->name('works.update');
Route::delete('/admin/works/delete/{id}', [AdminWorksController::class, 'destroy_works'])->name('works.destroy');
Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('profile.show');
Route::get('/admin/profile/edit',  [AdminProfileController::class, 'profile_edit'])->name('profile_edit.show');
Route::post('/admin/profile/edit', [AdminProfileController::class, 'edit'])->name('profile_edit.edit');
