@extends('layouts.main')

@section('content')


<div class="store p-4">
  <div class="container">
  <h2>MOVIES</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Original Title</th>
          <th scope="col">Nationality</th>
          <th scope="col">Date</th>
          <th scope="col">Vote</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($movies as $movie)
          <tr>
            <th scope="row">{{$movie->id}}</th>
            <td>{{$movie->title}}</td>
            <td>{{$movie->original_title}}</td>
            <td>{{$movie->nationality}}</td>
            <td>{{$movie->date}}</td>
            <td>{{$movie->vote}}</td>
          </tr>
        @empty
          <h2>Nessun risultato trovato</h2>
        @endforelse
        
      </tbody>
    </table>
  </div>
</div>


@endsection
