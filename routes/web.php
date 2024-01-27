<?php
use App\Http\Controllers\BookController ;
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

Route::get('/', [BookController::class , 'homepage'] ) ;
Route::get('/CreatBook', [BookController::class ,'bookCreat'] ) ;
Route::get('/{id}/show', [BookController::class ,'show'] ) -> name('book.show') ;