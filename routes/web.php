<?php

use App\Http\Controllers\CategoryController;
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

Route::get('cat', [CategoryController::class,'index'])->name('category.index');
Route::post('subcat', [CategoryController::class,'subCat'])->name('category.sub');
Route::post('subsubcat', [CategoryController::class,'subsubCat'])->name('category.sub.sub');

