@extends('layout/app')

@section('content')

<div class="container py-5">

    <h1 class="text-center pb-5 text-uppercase text-primary ">Ecco i film nel nostro database!</h1>
    

    <div class="d-flex flex-wrap gap-4 ">

        @foreach($movies as $movie)
        <div class="card " >
            
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
                <h2 class="card-title"><strong>{{$movie->title}}</strong></h5>
                <p class="card-text"><strong>Titolo Originale:</strong> {{$movie->original_title}}</p>
                <p class="card-text first-letter"><strong>Nazionalità:</strong> {{$movie->nationality}}</p>
                <p class="card-text"><strong>Data di Uscita:</strong> {{$movie->date}}</p>

                <p class="card-text"><strong>Valtazione iMDb:</strong> {{$movie->vote}}/10</p>

            </div>
            
        </div>
        @endforeach
    </div>
</div> 
@endsection
