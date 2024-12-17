<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AjoutController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/", [AccueilController::class, 'accueil'])->name("accueil"); 
Route::get("/albums", [AlbumController::class, 'albums'])->name("albums"); 
Route::get("/albums/{id}", [AlbumController::class, 'photosalbum'])->name("photosalbum"); 
Route::get("/tags/{tag}", [AlbumController::class, 'tags'])->name("tags"); 
Route::get("/ajouter",[AjoutController::class, 'ajout'])->name("ajout");
Route::post("/ajouter",[AjoutController::class, 'store'])->name("storephotos");
