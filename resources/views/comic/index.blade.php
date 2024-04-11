@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Lista Comics</h1>

        <ul>
            @foreach($comics as $comic)
                <li>{{$comic}}</li>
                <a href="{{route('comics.show', $comic->id)}}">Visualizza</a>
            @endforeach
        </ul>
    </div>
@endsection