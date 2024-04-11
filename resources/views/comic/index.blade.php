@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Lista Comics</h1>

        <ul class="mb-3">
            @foreach($comics as $comic)
                <li>{{$comic->title}}, {{$comic->series}}</li>
                <a href="{{route('comics.show', $comic->id)}}">Visualizza</a>
            @endforeach
        </ul>

        <a href="{{route('comics.create')}}" class="btn btn-secondary">Aggiungi</a>

    </div>
@endsection