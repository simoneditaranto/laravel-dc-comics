@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1>Aggiungi un nuovo fumetto</h1>

    {{-- nel form scriviamo il nome della rotta come action --}}
    <form action="{{route('comics.store')}}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo del fumetto</label>
            <input type="text" class="form-control" id="title" name="title">

            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>

            <label for="thumb" class="form-label">Immagine</label>
            <textarea type="text" class="form-control" id="thumb" name="thumb"></textarea>

            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price">

            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series">

            <label for="sale_date" class="form-label">Data</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">

            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">

            <label for="artists" class="form-label">Artisti</label>
            <textarea type="text" class="form-control" id="artists" name="artists"></textarea>

            <label for="writers" class="form-label">Scrittori</label>
            <textarea type="text" class="form-control" id="writers" name="writers"></textarea>
        </div>
        

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</div>

@endsection