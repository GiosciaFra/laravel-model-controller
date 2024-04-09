@extends('layout/app')

@section('content')




<div class="container py-5 ">

    <div class="card d-flex " style="width: 18rem;">
        @foreach($movies as $movie)
    
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <p class="card-text"> {{$movie->vote}}/10</p>
        </div>
        @endforeach
    
      </div>
    </div> 

    
</div>
@endsection
