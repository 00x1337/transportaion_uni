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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
            if(\App\Models\user_info::where("id_user",auth()->id())->first()){

            }else{
                return redirect("reg_1");
            }

        return view('dashboard');
    })->name('dashboard');
});
Route::get('/reg_1', function () {


    return view('reg_1');
})->name('reg_1');
Route::get('/home', function () {


    return view('home');
})->name('home');
Route::get('/chats', function () {


    return view('chats');
})->name("chats");

Route::get('/req', function () {


    return view('req');
})->name("req");
