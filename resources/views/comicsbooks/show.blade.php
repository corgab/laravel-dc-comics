@extends('layouts.app')

@section('title','comicsbooks')

<main>
    <section>
        <div class="container text-center">
            <h1>Pagina del libro: {{$comicsbook->title}}</h1>
            <div>
                <p>{{ $comicsbook->description}}</p>
                <p>{{ $comicsbook->sale_date}}</p>
            </div>
        </div>

    </section>
</main>

@section('content')

@endsection