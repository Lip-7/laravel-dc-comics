@extends('layouts.app')
@section('content')
    @include('partials.jumbo')
    <div class="wrap bg-dark">
        <div class="container">
            <form class="py-5" method="POST" action="{{ route('comics.store') }}">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label text-capitalize">title</label>
                            <input type="text" placeholder="Insert here comic's title" name="title"
                                class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="title"
                                aria-describedby="titleHelp" required>
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
                            <input type="url" name="thumb" placeholder="Insert here comic's image url"
                                class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb')}}" id="thumb" aria-describedby="thumbHelp" required>
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
                            <input type="text" placeholder="es. '$19.99'" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" id="price" aria-describedby="priceHelp" required>
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
                            <input type="text" name="series" placeholder="Insert here comic's series"
                                class="form-control @error('series') is-invalid @enderror" value="{{old('series')}}" id="series" aria-describedby="seriesHelp" required>
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
                            <input type="text" name="sale_date" pattern="\d{4}-\d{2}-\d{2}" placeholder="es. '1995-12-21'" class="form-control @error('sale_date') is-invalid @enderror" value="{{old('sale_date')}}" id="sale_date" aria-describedby="sale_dateHelp" required>
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
                            <input type="text" name="type" placeholder="Insert here comic's type" class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}" id="type" aria-describedby="typeHelp" required>
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
                            <input artists="text" name="artists" placeholder="es. 'Chugong, Enchiro Oda, ecc..'"
                                class="form-control @error('artists') is-invalid @enderror" value="{{old('artists')}}" id="artists" aria-describedby="artistsHelp" required>
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
                            <input writers="text" name="writers" placeholder="es. 'Chugong, Enchiro Oda, ecc..'"
                                class="form-control @error('writers') is-invalid @enderror" value="{{old('writers')}}" id="writers" aria-describedby="writersHelp" required>
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
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
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
