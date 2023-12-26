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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
            if(\App\Models\user_info::where("id_user",auth()->id())->first()){

            }else{
                return redirect("/");
            }

        return redirect("/");
    })->name('dashboard');
});
Route::get('/', function () {

if(\Illuminate\Support\Facades\Auth::check()){
    return view('reg_1');

}
return view('welcome');

})->name('reg_1');
Route::get('/home', function () {


    return view('home');
})->name('home');
Route::get('/chats', function () {

    if(\Illuminate\Support\Facades\Auth::user()->role == "driver") {

        return view('chats_2_driver');

    }else{
    return view('chats');
    }

})->name("chats");

Route::get('/req', function () {


    return view('req');
})->name("req");
Route::get('/chats/2', function () {


    return view('chats_2');
})->name("chats_2");

Route::get('/chats/1', function () {


    return view('chats_1');
})->name("chats_1");

Route::get('/chats/user/{id}', function ($id) {


    return view('chats_2_user',compact('id'));
})->name("chats_user");
Route::get('/chats/3', function () {


    return view('chats_3');
})->name("chats_3");

Route::get('/profile/{id}', function ($id) {


    return view('profile',compact('id'));
})->name("profile");

Route::get('/req_driver', function () {


    return view('req_driver');
})->name("req_driver");
