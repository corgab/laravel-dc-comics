@extends('layouts.app')

@section('title','comicsbooks')

@section('content')
<main>

    <div class="container">
        <form action="{{ route('comicsbooks.store') }}" method="POST">
            @csrf
    
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control">
            </div>
            <button class="btn btn-primary">invia</button>
        </form>
    </div>

</main>
@endsection

{{-- {{ rout('comicsbooks.store') }} --}}