<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TicketsController;
use App\Models\Destination;
use App\Models\Tickets;
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

// routing halamn utama
Route::get('/', function ()
{
   return view('pages.user.index', ['destinations'=> Destination::latest()->get()]);
});
// routing detail destinasi
Route::get('/destinasi/{destination}', [DestinationController::class,'show']);

// routing daftar harga
Route::get('/daftar-harga', function (Destination $destination) {
    return view('pages.user.daftar-harga', ['destinations'=>$destination->orderBy('name', 'ASC')->get()]);
});

// routing register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// routing login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

// route tiket user
Route::get('/tiket', [TicketsController::class,'index'])->middleware('auth');
Route::post('/tiket', [TicketsController::class,'store'])->middleware('auth');

// route dashboard admin
Route::get('/dashboard', function (Destination $destination) {
    return view('pages.admin.index', ['destinations'=>$destination->orderBy('name', 'ASC')->get()]);
});

// route wisata admin
Route::get('/admin/wisata', [DestinationController::class,'index']);
Route::get('/admin/wisata/{destination}/edit', [DestinationController::class,'edit']);
Route::get('/admin/wisata/create', [DestinationController::class,'create']);
Route::post('/admin/wisata', [DestinationController::class,'store']);
Route::put('/admin/wisata/{destination}', [DestinationController::class,'update']);
Route::delete('/admin/wisata/{destination}', [DestinationController::class,'destroy']);

// route grafik admin
Route::get('/admin/grafik', [GrafikController::class, 'index']);

// route mytiket
Route::get('/my-tiket', function (Tickets $tickets) {
    return view('pages.user.my-tiket', ['ticket'=>$tickets->orderBy('id', 'desc')->first()]);
});




