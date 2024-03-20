<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\WebController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', [WebController::class, 'paginaInicial'])->name('paginaInicial');

Route::get('/catalogo', [WebController::class, 'catalogo'])->name('catalogo');

Route::get('/adminlogin', function () {
    return view('admin_login');
});

Route::get('/userlogin', function () {
    return view('user_login');
});

Route::get('/recomendados', [WebController::class, 'recomendados'])->name('recomendados');

route::get('/sobre', [WebController::class, 'sobre'])->name('sobre');

Route::get('/', [userController::class, 'showLogin'])->name('login')->name('showLogin');

route:: post('/catalogo',[userController::class, 'login'])->name('login');