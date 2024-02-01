<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">
        <!-- resources/views/welcome.blade.php -->


        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
    
            <h2>All Musiques</h2>
    
            @foreach($musiques as $musique)
                {{-- Display musiques as needed --}}
                <p>{{ $musique->artiste }} - {{ $musique->titre }}</p>
            @endforeach
        </div>

hahahahahaha
     
    </body>
</html>
