@extends('layouts.app')
@section('content')
@include('partials.jumbo')
<div class="blueBanner bg-primary">
    <div class="container">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
</div>
<div class="comicInfo container my-5 text-primary position-relative">
    <h2>{{$comic['title']}}</h2>
    <div class="row priceInfo border-2 border">
        <div class="col-8 py-3 ps-4">
            <h6 class="mb-0">U.S. Price: <span class="text-white">$19.99</span></h6>
        </div>
        <div class="col-4 py-3 ps-4 text-white">
            Check Availability
        </div>
    </div>
    <p class="text-black mt-2">{{$comic["description"]}}</p>
    <div class="edit-comic d-flex gap-2">
        <a href="{{route('comics.edit', $comic)}}"><button class="btn btn-primary">Edit Comic</button></a>
        <form action="{{route('comics.destroy', $comic)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger deleteBtn" data-item-title="{{$comic->title}}">Delete</button>
        </form>
    </div>
</div>
<div class="comicDetails py-4">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 col-lg-6">
                <h3 class="text-primary mb-4">Talent</h3>
                <div class="artist d-flex justify-content-between text-black w-100 gap-3 text-small pt-1">
                    <h6 class="minw">Art by:</h6>
                    <p>
                        {{-- @foreach ($comic['artists'] as $artist)
                            <a href="#">{{$artist}}</a>
                        @endforeach --}}
                        {{$comic->artists}}
                    </p>
                </div>
                <div class="writers d-flex justify-content-between text-black w-100 gap-3 text-small pt-1">
                    <h6 class="minw">Written by:</h6>
                    <p>
                        {{-- @foreach ($comic['writers'] as $writer)
                            <a href="#">{{$writer}}</a>
                        @endforeach --}}
                        {{$comic->writers}}
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="text-primary mb-4">Specs</h3>
                <div class="artist series d-flex justify-content-between text-black w-100 text-small pt-1">
                    <h6 class=" d-inline">Series:</h6>
                    <p class=" d-inline-block  text-uppercase text-primary text-center w-75 pe-7">{{$comic['series']}}</p>
                </div>
                <div class="artist series d-flex justify-content-between text-black w-100 text-small pt-1">
                    <h6 class=" d-inline">U.S. Price:</h6>
                    <p class=" d-inline-block  text-uppercase text-primary text-center w-75 pe-7">{{$comic['price']}}</p>
                </div>
                <div class="artist series d-flex justify-content-between text-black w-100 text-small pt-1">
                    <h6 class=" d-inline">On sale date:</h6>
                    <p class=" d-inline-block  text-uppercase text-primary text-center w-75 pe-7">{{$comic["sale_date"]}}</p>
                </div>

            </div>
        </div>
    </div>
</div>
@include('partials.modal')
@include('partials.links')
@endsection
