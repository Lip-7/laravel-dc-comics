@extends('layouts.app')
@section('content')
    @include('partials.jumbo')
    <div class="wrapper bg-dark">
        <section class="container">
            <h2 class="text-primary fw-bold pt-3">All our Comics</h2>
            <div class="d-flex justify-content-end mb-1">
                <a href="{{route('comics.create')}}"><button class="btn btn-primary ">Add new Comic</button></a>

            </div>
            <div class="cardsContainer p-5 d-flex flex-wrap gap-4 justify-content-center">
                @foreach ($comics as $card)
                    @include('partials.singleCardDb', $props = [$card, $loop->index])
                @endforeach
            </div>
        </section>
    </div>

    @include('partials.links')
@endsection
