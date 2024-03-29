<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\userControllerController;
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
    return view('welcome');
});
// Route::get('/users', function () {
//     return view('user.index');
// });
 
Route::get('register/seeker',[userController::class,'createSeeker'])->name('create.Seeker');
Route::post('register/seeker',[userController::class,'storeSeeker'])->name('store.Seeker');