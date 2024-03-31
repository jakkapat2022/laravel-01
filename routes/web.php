<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admincontroller;
use Faker\Provider\Company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\StudentsCRUDController;
use App\Http\Controllers\HomePageController;
use PHPUnit\Metadata\Group;


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
    return view('/homepages/index');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    //Route::resource('homepages',HomePageController::class);
    Route::get('/homepages/login', [HomePageController::class, 'login'])->name('homepages.login');
    Route::resource('companies',CompanyCRUDController::class);
    Route::resource('students',StudentsCRUDController::class);
});
Route::get('/homepages/index', [HomePageController::class, 'index'])->name('homepages.index');
//Route::get('/students',[StudentsCRUDController::class, 'index'])->name('students.index')->middleware('auth');
//Route::get('/students/create',[StudentsCRUDController::class, 'create'])->name('students.create')->middleware('auth','is_admin');
//Route::get('/students/edit',[StudentsCRUDController::class, 'edit'])->name('students.edit')->middleware('auth','is_admin');
//Route::delete('/students/destroy/{id}', [StudentsCRUDController::class, 'destroy'])->name('students.destroy');
//Route::post('/students/{id}/edit', [StudentsCRUDController::class, 'update'])->name('students.edit');

Route::post('/updateProfile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('update.profile');
Route::get('admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('auth','is_admin');
Route::get('/profileSeting',[HomeController::class, 'profileSeting'])->name('profileSeting')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

