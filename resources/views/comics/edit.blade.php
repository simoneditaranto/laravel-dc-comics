@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h1>Modifica fumetto</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">

        @csrf
        @method('PUT');

        <div class="mb-3">
            <label for="title" class="form-label">Titolo del fumetto</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">

            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description">{{$comic->description}}</textarea>

            <label for="thumb" class="form-label">Immagine</label>
            <textarea type="text" class="form-control" id="thumb" name="thumb">{{$comic->thumb}}</textarea>

            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">

            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">

            <label for="sale_date" class="form-label">Data</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">

            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">

            <label for="artists" class="form-label">Artisti</label>
            <textarea type="text" class="form-control" id="artists" name="artists">{{$comic->artists}}</textarea>

            <label for="writers" class="form-label">Scrittori</label>
            <textarea type="text" class="form-control" id="writers" name="writers">{{$comic->writers}}</textarea>
        </div>
        

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</div>
@endsection
