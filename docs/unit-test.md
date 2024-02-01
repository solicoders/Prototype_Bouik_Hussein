# Unit Test

I have tested the functions of the `Musique` class using the following routes:

## Get All Musiques
```
Route::get('/musiques', function () use ($musiqueRepository) {
    $musiques = $musiqueRepository->getAllMusiques(); // Replace with the actual method to retrieve all musiques
    return view('welcome')->with('musiques', $musiques);
});

```

## Get Musique By Id
```
Route::get('/musiques/{id}', function ($id) use ($musiqueRepository) {
    $musique = $musiqueRepository->getMusiqueById($id); // Replace with the actual method to retrieve a musique by id
    return view('welcome')->with('musique', $musique);
});

```

## Create Musique
```
Route::get('/musiques/{id}/create', function (Request $request, $id) use ($musiqueRepository) {
    $musiqueData =[
        'artiste' =>'test',
        'titre' =>'test',
        'reference' =>'test',
        'type_id' =>1,
        'created_at' =>'2021-01-01',
        'updated_at' =>'2021-01-01',
    ];
    $musiqueRepository->create($id, $musiqueData); // Replace with the actual method to update a musique
    return view('welcome')->with('success', 'Musique updated successfully');
});

```