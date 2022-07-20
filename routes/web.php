<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TicketsController;
use App\Models\Destination;
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

Route::get('/', function ()
{
   return view('pages.user.index', ['destinations'=> Destination::latest()->get()]);
} );
Route::get('/destinasi/{destination}', [DestinationController::class,'show']);

Route::get('/daftar-harga', function (Destination $destination) {
    return view('pages.user.daftar-harga', ['destinations'=>$destination->orderBy('name', 'ASC')->get()]);
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);


Route::get('/tiket', [TicketsController::class,'index'])->middleware('auth');
Route::post('/tiket', [TicketsController::class,'store'])->middleware('auth');

Route::get('/dashboard', function (Destination $destination) {
    return view('pages.admin.index', ['destinations'=>$destination->orderBy('name', 'ASC')->get()]);
});

Route::get('/admin/wisata', [DestinationController::class,'index']);
Route::get('/admin/wisata/{destination}/edit', [DestinationController::class,'edit']);
Route::get('/admin/wisata/create', [DestinationController::class,'create']);
Route::post('/admin/wisata', [DestinationController::class,'store']);
Route::put('/admin/wisata/{destination}', [DestinationController::class,'update']);
Route::delete('/admin/wisata/{destination}', [DestinationController::class,'destroy']);





