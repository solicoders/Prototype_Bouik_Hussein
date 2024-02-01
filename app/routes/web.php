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
use Illuminate\Http\Request;

$musiqueRepository = new MusiquesRepository(new Musique());

Route::get('/musiques', function () use ($musiqueRepository) {
    $musiques = $musiqueRepository->getAllMusiques(); // Replace with the actual method to retrieve all musiques
    return view('welcome')->with('musiques', $musiques);
});

Route::get('/musiques/create', function () {

    return view('welcome');
});

Route::post('/musiques', function (Request $request) use ($musiqueRepository) {
    $musiqueData = $request->all();
    $musiqueRepository->create($musiqueData); // Replace with the actual method to create a musique
    return view('welcome')->with('success', 'Musique created successfully');
});



Route::get('/musiques/{id}/update', function (Request $request, $id) use ($musiqueRepository) {
    $musiqueData =[
        'artiste' =>'test',
        'titre' =>'test',
        'reference' =>'test',
        'type_id' =>1,
        'created_at' =>'2021-01-01',
        'updated_at' =>'2021-01-01',
    ];
    $musiqueRepository->update($id, $musiqueData); // Replace with the actual method to update a musique
    return view('welcome')->with('success', 'Musique updated successfully');
});

Route::delete('/musiques/{id}/delete', function ($id) use ($musiqueRepository) {
    $musiqueRepository->delete($id); // Replace with the actual method to delete a musique
    return view('welcome')->with('success', 'Musique deleted successfully');
});
