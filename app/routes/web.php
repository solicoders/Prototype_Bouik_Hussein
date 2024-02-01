<?php

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
// routes/web.php

use Illuminate\Support\Facades\View;
use App\Models\GestionMusique\Musique;
use App\Models\GestionMusique\Type;
use App\Repository\GestionMusique\MusiquesRepository;
use App\Http\Controllers\GestionMusique\MusicController;
use App\Http\Controllers\GestionMusique\TypeController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('musiques')->group(function () {
    Route::get('/', [MusicController::class, 'index'])->name('musiques.index');
    Route::get('/create', [MusicController::class, 'create'])->name('musiques.create');
    Route::post('/', [MusicController::class, 'store'])->name('musiques.store');
    Route::get('/{musiques}/edit', [MusicController::class, 'edit'])->name('musiques.edit');
    Route::post('/{musiques}', [MusicController::class, 'update'])->name('musiques.update');
    Route::delete('/{musiques}', [MusicController::class, 'destroy'])->name('musiques.destroy');
});
Route::prefix('types')->group(function () {
    Route::get('/create', [TypeController::class, 'create'])->name('types.create');
    Route::post('/', [TypeController::class, 'store'])->name('types.store');
    Route::get('/{types}/edit', [TypeController::class, 'edit'])->name('types.edit');
    Route::post('/{types}', [TypeController::class, 'update'])->name('types.update');
    Route::delete('/{types}', [TypeController::class, 'destroy'])->name('types.destroy');
});