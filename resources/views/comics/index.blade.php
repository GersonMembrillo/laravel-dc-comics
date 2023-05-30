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
                            <div class="d-flex bottom-flex">
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button btn btn-danger"
                                        data-item-title="{{ $comic->title }}">Delete</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <a href="{{ route('comics.create') }}" class="btn btn-primary my-3">Add New</a>
    </div>
@endsection

<style>
    .card-img-top {
        width: 100%;
        height: 35vw;
        object-fit: cover;
    }

    .bottom-flex {
        height: 38px;
    }

    .btn-warning {
        width: 100%
    }
</style>
