<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterUserController;

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
// Route::get('/', function () {

//     return view('welcome');
// });

//-----------------------------------------------------------------------------------------------------------
Route::prefix('register')->name('register')->group(function () {
    Route::get("/", [RegisterUserController::class, "registerForm"]);
    Route::post("/", [RegisterUserController::class, "register"]);
});
//______________________________________________________________________________________________________________________

//-----------------------------------------------------------------------------------------------------------
Route::prefix('login')->name('login')->group(function () {
    Route::get("/", [LoginUserController::class, "loginForm"]);
    Route::post("/", [LoginUserController::class, "login"]);
});
//______________________________________________________________________________________________________________________

//-----------------------------------------------------------------------------------------------------------
Route::prefix('logout')->name('logout')->middleware(['auth'])->group(function () {
    Route::post("/",[LogoutController::class, "logout"]);
    // Route::post("/",[LogoutController::class, "loggedOut"]);
    /**
     * or
     */
    // Route::get('/', function() {
    //     Auth::logout();
    //     return redirect('/')->with(['message' => 'تم تسجيل الخروج']);
    // });
});
//______________________________________________________________________________________________________________________

//-----------------------------------------------------------------------------------------------------------
/**
 * users role owner routes
 */
Route::prefix('/')->name('users')->middleware(['auth'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('.index');
        Route::get('/create', 'create')->name('.create');
        Route::post('/', 'store')->name('.store');
        Route::get('/{user}', 'show')->name('.show');
        Route::get('/{user}/edit', 'edit')->name('.edit');
        Route::Put('/{user}', 'update')->name('.update');
        Route::delete('/{user}', 'destroy')->name('.destroy');
    });
});
//______________________________________________________________________________________________________________________

