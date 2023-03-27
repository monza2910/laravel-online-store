<?php

use App\Http\Controllers\Web\Master\ProductController;
use App\Http\Controllers\Web\Interface\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('layouts.admin.main');
});

route::prefix('admin')->group(function(){
    Route::resource('product', ProductController::class);

});

Route::get('/',function(){
    return view('interface.home');
});

