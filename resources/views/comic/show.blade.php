@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>{{$comic->title}}</h1>

        <p>{{$comic->description}}</p>
    </div>
@endsection