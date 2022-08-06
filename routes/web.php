<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth', 'can:isAdmin'])->group(function(){
   Route::get('/admin', [AdminController::class, 'index']);
   Route::get('/admin/{draft}', [AdminController::class, 'create']);
   Route::post('/admin/store', [AdminController::class, 'store']);
   Route::post('/admin/store_tag', [AdminController::class, 'store_tag']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(PortfolioController::class)->group(function() {
   Route::get('/portfolio', 'index');
   Route::get('/create', 'create');
   Route::get('/create_comment/{portfolio}', 'create_comment');
   Route::post('/store', 'store');
   Route::post('/store_comment', 'store_comment');
   Route::get('/portfolio/{portfolio}', 'show');
   Route::get('search_form', 'search_form')->name('search_form');
});

