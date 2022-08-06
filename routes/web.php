<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PortfolioController;
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


Route::controller(PortfolioController::class)->group(function() {
   Route::get('/', 'index');
   Route::get('create', 'create');
   Route::post('/store', 'store');
   Route::get('/show', 'show');
});
// Route::get('/test', function () {
//     return view('welcome');
// });
