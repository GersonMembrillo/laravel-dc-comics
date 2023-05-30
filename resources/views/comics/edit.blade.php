@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="text-center">Edit Comic: {{ $comic->title }}</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name='title' id="title" aria-describedby="titleHelp"
                            value="{{ $comic->title }}">
                        <div id="titleHelp" class="form-text">Enter comic title</div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name='description' id="description"
                            aria-describedby="descriptionHelp" value="{{ $comic->description }}">
                        <div id="descriptionHelp" class="form-text">Add description</div>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" name='image' id="image"
                            aria-describedby="imageHelp" value="{{ $comic->image }}">
                        <div id="imageHelp" class="form-text">Add image URL</div>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name='price' id="price"
                            aria-describedby="priceHelp" value="{{ $comic->price }}">
                        <div id="priceHelp" class="form-text">Add comic price (start with $)</div>
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" name='series' id="series"
                            aria-describedby="seriesHelp" value="{{ $comic->series }}">
                        <div id="seriesHelp" class="form-text">Add comic series</div>
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Date of publication</label>
                        <input type="text" class="form-control" name='sale_date' id="sale_date"
                            aria-describedby="sale_dateHelp" value="{{ $comic->sale_date }}">
                        <div id="sale_dateHelp" class="form-text">Add date of publication</div>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" name='type' id="type" aria-describedby="typeHelp"
                            value="{{ $comic->type }}">
                        <div id="typeHelp" class="form-text">Add comic type</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>
    </section>
@endsection
