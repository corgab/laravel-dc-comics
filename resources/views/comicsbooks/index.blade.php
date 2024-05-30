@extends('layouts.app')

@section('title','comicsbooks')

@section('content')
<main>
    <section>
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
            </tr>
            @endforeach
            </tbody>
          </table>
    </section>
</main>
@endsection