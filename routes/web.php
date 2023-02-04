<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
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


Route::middleware('auth')
    ->prefix('usuarios')
    ->controller(UsersController::class)
    ->name('users.')
    ->group(function (){
    Route::get('/', 'index')->name('index');
    Route::get('/novo-usuario', 'create')->name('create');
    Route::post('/novo-usuario', 'store')->name('store')->withoutMiddleware('auth');
    Route::get('/editar/{id}', 'edit')->name('edit');
    Route::put('/editar/{id}',  'update')->name('update');
    Route::get('/{id}/detalhes',  'show')->name('show');
    Route::get('/{id}/endereco', 'address')->name('address');
    Route::get('/{id}/posts', 'posts')->name('posts');
    Route::delete('/deletar/{id}','destroy')->name('destroy');
});



Route::get('/', [PostsController::class, 'index']);

Route::get('/create', [PostsController::class, 'create'])->name('posts.create');



Route::post('/store', [PostsController::class, 'store'])->name('posts.store');



Auth::routes();

