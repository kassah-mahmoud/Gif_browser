<?php

use App\Http\Controllers\SearchController;
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
})->middleware(['auth']);

// Route::get('/search', function () {
//     return view('search');
// })->middleware(['auth'])->name('search');

Route::get('/search', SearchController::class)->middleware(['auth'])->name('search');

require __DIR__.'/auth.php';
