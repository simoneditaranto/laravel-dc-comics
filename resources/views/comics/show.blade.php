@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>{{$comic->title}}</h1>

        <p>{{$comic->description}}</p>

        <div class="comic-info d-flex align-items-center gap-5">
            <div class="comic-thumb">

                <img src="{{$comic->thumb}}" alt="">

            </div>

            <div class="comic-details">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Data d'uscita</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Serie</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->series}}</td>
                      </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Artisti</th>
                        <th scope="col">Scrittori</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$comic->artists}}</td>
                        <td>{{$comic->writers}}</td>
                      </tr>
                    </tbody>
                </table>

            </div>

        </div>

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