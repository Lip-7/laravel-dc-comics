@extends('layouts.app')
@section('content')
    @include('partials.jumbo')
    <div class="wrap bg-dark">
        <div class="container">
            <h1 class="pt-3">Editing {{$comic->title}}</h1>
            <form class="py-5" method="POST" action="{{route('comics.update', $comic)}}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label text-capitalize">title</label>
                            <input type="text" value="{{$comic->title}}" placeholder="Insert here comic's title" name="title" class="form-control" id="title" aria-describedby="titleHelp" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="thumb" class="form-label text-capitalize">thumb</label>
                            <input type="text" value="{{$comic->thumb}}" name="thumb" placeholder="Insert here comic's image url" class="form-control" id="thumb" aria-describedby="thumbHelp" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="price" class="form-label text-capitalize">price</label>
                            <input type="text"  value="{{$comic->price}}" placeholder="es. '$19.99'" name="price" class="form-control" id="price" aria-describedby="priceHelp" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="series" class="form-label text-capitalize">series</label>
                            <input type="text"  value="{{$comic->title}}" name="series" placeholder="Insert here comic's series" class="form-control" id="series" aria-describedby="seriesHelp" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="sale_date" class="form-label text-capitalize">sale date</label>
                            <input type="text"  value="{{$comic->sale_date}}" name="sale_date" placeholder="es. '1995-12-21'" class="form-control" id="sale_date" aria-describedby="sale_dateHelp" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="type" class="form-label text-capitalize">type</label>
                            <input type="text" value="{{$comic->type}}" name="type" placeholder="Insert here comic's type" class="form-control" id="type" aria-describedby="typeHelp" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="artists" class="form-label text-capitalize">artists</label>
                            <input artists="text" value="{{$comic->artists}}" name="artists" placeholder="Insert here comic's artists" class="form-control" id="artists" aria-describedby="artistsHelp" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="writers" class="form-label text-capitalize">writers</label>
                            <input writers="text" value="{{$comic->writers}}" name="writers" placeholder="Insert here comic's writers" class="form-control" id="writers" aria-describedby="writersHelp" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label text-capitalize">description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$comic->description}}"</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @include('partials.links')
@endsection
