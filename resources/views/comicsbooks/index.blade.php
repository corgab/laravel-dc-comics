@extends('layouts.app')

@section('title','comicsbooks')

@section('content')
<main>
    <section>
        <div class="container">
            <h1 class="text-center">index comicsbooks</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Desc</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($comicsbooks as $comicsbook)
                  <tr>
                    <th scope="row">{{ $comicsbook->id}}</th>
                    <td>
                        <a href="{{ route('comicsbooks.show', $comicsbook) }}">{{ $comicsbook->title }}</a>
                    </td>
                    <td>{{ $comicsbook->description }}</td>
                    <td>{{ $comicsbook->sale_date }}</td>
                    <td>
                        <div>
                            <a href="{{ route('comicsbooks.edit', $comicsbook) }}">Modifica</a>
                            <form action="{{ route('comicsbooks.destroy', $comicsbook) }}" method="POST">
                                @method('DELETE')
                                @csrf
                               <button class="btn btn-link link-danger">Elimina</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </section>
</main>
@endsection