@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-secondary text-white my-5">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $comic->image }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title text-uppercase">{{ $comic->title }}</h3>
                        <hr>
                        <p class="card-text"><span class="fw-light">Series: </span><span
                                class="text-capitalize fw-bold">{{ $comic->type }}</span></p>
                        <p class="card-text fst-italic">{{ $comic->description }}</p>

                        <div class="text-end">
                            <small class="text-body-secondary">
                                <p class="fw-lighter fst-italic">
                                    Year of publication: {{ $comic->sale_date }}</p>
                                <p class="fw-lighter fst-italic">
                                    Price: {{ $comic->price }}</p>
                            </small>
                            <button type="button" class="btn btn-primary">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .img-fluid {}
</style>
