<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\AdminController;
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

Route::controller(AdminController::class)->prefix('/admin')->group(function (){

    Route::any('/logout', 'logout')->name('logout');
    Route::get('/login', 'getLogin')->name('getLogin');

    Route::post('/log-in', 'login')->name('login');

    Route::middleware('auth')->group(function(){
        Route::get('/messages', 'getMessages')->name('message');
    });

});
Route::controller(HomeController::class)->group(function (){

    Route::get('/change', 'change')->name('changeLang');

    Route::get('/','index')->name('home');

    Route::post('/send','sendMessage')->name('sendMessage');
});

Route::get('/portfolio', function () {
    return view('Pages.portfolio');
})->name('page.portfolio');

