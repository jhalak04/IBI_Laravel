<?php

use App\Http\Controllers\ShowActors;
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
Route::get('/', [ShowActors::class, 'index']);
Route::get('/starwars', [ShowActors::class, 'showStarWarsActors']);


//Route::get('/', function () {
//    $actors = Actor::all();
//    return view('welcome', ['actors' => $actors]);
//});
