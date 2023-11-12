<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Baiboly\ChapterController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SousCategorieController;
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

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/tongasoa', [HomeController::class, 'index'])->name('home');
Route::get('/baiboly', [ChapterController::class, 'index'])->name('baiboly.index');
Route::post('/baiboly', [ChapterController::class, 'send'])->name('baiboly.send');
Route::get('/result', [SearchController::class, 'index'])->name('search.index');
Route::get('/sokajy/{slug}-{categorie}', [CategorieController::class, 'show'])->name('categorie.show')->where(['categorie' => $idRegex, 'slug' => $slugRegex]);
Route::get('/fjkm-akv/{slug}-{souscategorie}', [SousCategorieController::class, 'show'])->name('souscategorie.show')->where(['souscategorie' => $idRegex, 'slug' => $slugRegex]);

Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');

// Route::fallback(function () {
//     return 'Still got somewhere!';
// });
