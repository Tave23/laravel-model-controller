@extends('layouts.main')

@section('content')

<div class="container">

   <h2>
      Movies
   </h2>

   <hr>

   <div class="row">
      <div class="column">
         <div class="box d-flex">

            @forelse ($movies as $movie)

            <div class="card">
               <h4>{{ $movie->id }}</h4>
               <h3>{{ $movie->title }}</h3>
               <h6>{{ $movie->original_title }}</h6>
               <h5>{{ $movie->nationality }}</h5>
               <h5>{{ $movie->date }}</h5>
               <h4>{{ $movie->vote }}</h4>
            </div>
               
            @empty
               
            <h3 class="noResult">
               Nessun risultato!
            </h3>

            @endforelse


         </div>
      </div>
   </div>

</div>

@endsection