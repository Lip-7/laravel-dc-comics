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
                            <input type="text" value="{{old('title', $comic->title)}}" placeholder="Insert here comic's title" name="title" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="thumb" class="form-label text-capitalize">thumb</label>
                            <input type="text" value="{{old('thumb', $comic->thumb)}}" name="thumb" placeholder="Insert here comic's image url" class="form-control @error('thumb') is-invalid @enderror" id="thumb" aria-describedby="thumbHelp" required>
                            @error('thumb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="price" class="form-label text-capitalize">price</label>
                            <input type="text"  value="{{old('price', $comic->price)}}" placeholder="es. '$19.99'" name="price" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="priceHelp" required>
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="series" class="form-label text-capitalize">series</label>
                            <input type="text"  value="{{old('series', $comic->series)}}" name="series" placeholder="Insert here comic's series" class="form-control @error('series') is-invalid @enderror" id="series" aria-describedby="seriesHelp" required>
                            @error('series')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="sale_date" class="form-label text-capitalize">sale date</label>
                            <input type="text"  value="{{old('sale_date', $comic->sale_date)}}" name="sale_date" placeholder="es. '1995-12-21'" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" aria-describedby="sale_dateHelp" required>
                            @error('sale_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="type" class="form-label text-capitalize">type</label>
                            <input type="text" value="{{old('type', $comic->type)}}" name="type" placeholder="Insert here comic's type" class="form-control @error('type') is-invalid @enderror" id="type" aria-describedby="typeHelp" required>
                            @error('type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="artists" class="form-label text-capitalize">artists</label>
                            <input artists="text" value="{{old('artists', $comic->artists)}}" name="artists" placeholder="es. 'Chugong, Enchiro Oda, ecc..'" class="form-control @error('artists') is-invalid @enderror" id="artists" aria-describedby="artistsHelp" required>
                            @error('artists')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="writers" class="form-label text-capitalize">writers</label>
                            <input writers="text" value="{{old('writers', $comic->writers)}}" name="writers" placeholder="es. 'Chugong, Enchiro Oda, ecc..'" class="form-control @error('writers') is-invalid @enderror" id="writers" aria-describedby="writersHelp" required>
                            @error('writers')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label text-capitalize">description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">@if(old('description')){{old('description')}}@else{{$comic->description}}@endif</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @include('partials.links')
@endsection
