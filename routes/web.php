<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PageViewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TeacherController;

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

Route::get('/', [PageViewController::class, 'home'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home.home');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/create-role', [RoleController::class, 'create'])->name('create-role');
    Route::post('/new-role', [RoleController::class, 'newRole'])->name('new-role');

//    teachers routes
    Route::get('/create-profile', [TeacherController::class, 'createProfile'])->name('create-profile');
    Route::post('/new-profile', [TeacherController::class, 'newProfile'])->name('new-profile');
});
