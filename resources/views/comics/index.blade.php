@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Lista Comics</h1>
        
        <table class="table">
            <thead>
              <tr>
                  <th scope="col">Titolo</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Prezzo</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($comics as $comic)
              <tr>
                  <td>{{$comic->title}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->price}}</td>
                <td><a href="{{route('comics.show', $comic->id)}}"><button class="btn btn-primary">Visualizza</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
          <a href="{{route('comics.create')}}" class="btn btn-secondary">Aggiungi</a>
          <a href="/" class="btn btn-secondary">Home</a>


        </div>

@endsection