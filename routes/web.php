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

Route::get('/', [BookController::class , 'homepage'] ) ->name('book.homepage') ;
Route::get('/CreatBook', [BookController::class ,'bookCreat'] ) ->name('book.bookCreat') ;
Route::get('/{id}/show', [BookController::class ,'show'] ) -> name('book.show') ;
Route::post('', [BookController::class ,'store'] ) -> name('book.store') ;
Route::get('/{id}/edit', [BookController::class ,'edit'] ) -> name('book.edit') ;
Route::post('/{id}', [BookController::class ,'update'] ) -> name('book.update') ;
Route::post('/{id}', [BookController::class ,'destroy'] ) -> name('book.destroy') ;