@extends('layouts.main')

@section('content')

<div class="container">

   <h2>
      Home
   </h2>

   <h3>
      Ciao {{ $name }} {{ $surname }}
   </h3>

   <div class="d-flex">
      <h3>Cliccando su <a {{ (Route::currentRouteName() === 'movies') ? 'active' : '' }}" href="{{ route('movies') }}">Film</a> troverai tutti i film</h3>
   </div>
</div>

@endsection