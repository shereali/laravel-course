<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;

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

Route::get('down', function(){
 Artisan::call('down');
 return "Site is now maintanance moode";
});

Route::get('up', function(){
 Artisan::call('up');
 return "Site is now maintanance moode";
});

Route::get('optimize', function(){
 Artisan::call('optimize:clear');
 return 'optimize ok';  // or whatever you want...
});

Route::get('/', function () {
    return view('rifat');
});

Route::get('/rifat', function(){
    return view('rifat');
});

Route::get('/course', function(){
    return view('course');
});

Route::get('user', [UserController::class, 'user']);

Route::get('library', function(){
    return view ('library');
});
