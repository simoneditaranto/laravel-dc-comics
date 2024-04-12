@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>{{$comic->title}}</h1>

        <p>{{$comic->description}}</p>

        <button class="btn btn-warning">
            <a href="{{route('comics.edit', $comic->id)}}">Modifica</a>
        </button>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elmina fumetto
        </button>
  
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sei sicuro di voler eliminare il fumetto "{{$comic->title}}"?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method("DELETE")

                            <button class="btn btn-danger">Elimina</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection