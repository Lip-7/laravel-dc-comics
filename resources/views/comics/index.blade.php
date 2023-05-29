@extends('layouts.app')
@section('content')
    @include('partials.jumbo')
    <div class="wrapper bg-dark">
        <section class="container">
            <h2 class="text-primary fw-bold pt-2">All our Comics</h2>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary ">Add new Comic</button>
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
