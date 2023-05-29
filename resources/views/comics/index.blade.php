@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Comic List</h1>
        <div class="row">

            @foreach ($comics as $comic)
                <div class="col-sm-12 col-md-4 col-lg-3 card-group my-3">
                    <div class="card d-flex flex-column">
                        <img src="{{ $comic->image }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body bg-secondary d-flex flex-column">
                            <h5 class="card-title text-white">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic->id) }}" class="mt-auto btn btn-primary ">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

<style>
    .card-img-top {
        width: 100%;
        height: 35vw;
        object-fit: cover;
    }
</style>
