
@extends('layouts.app')
@section('content')
<div class="wrapermain bg-dark">
    @include('partials.jumbo')
    <div class="container p-4">
        <div class="currentSeries p-3">
            <h3 class="text-uppercase mb-0">current Series</h3>
        </div>
        <!-- <h2 class="m-3">--Content goes here--</h2> -->
        <div class="cardsContainer d-flex flex-wrap justify-content-center gap-4">
           {{--  <CardComponent :thumb="com.thumb" :price="com.price" :series="com.series" :type="com.type" v-for="com in comicsArray"/> --}}
           @foreach ($comics as $card)
            @include('partials.singleCard', $props = [$card, $loop->index])
           @endforeach
        </div>
        <div class="loadMoreButtonWrapper justify-content-center d-flex mt-4">
            <div class="loadMoreButton p-2 px-5">
                <h5 class="text-capitalize mb-0">Load more</h5>
            </div>
        </div>
    </div>
    <div class="bannerWrap">
        <div class="banners d-flex justify-content-evenly container py-5">
            <div class="item d-flex align-items-center gap-3">
                <div class="logo">
                    <img src="./img/buy-comics-digital-comics.png" alt="">
                </div>
                <h4 class="text-uppercase mb-0">Digital Comics</h4>
            </div>
            <div class="item d-flex align-items-center gap-3">
                <div class="logo">
                    <img src="./img/buy-comics-merchandise.png" alt="">
                </div>
                <h4 class="text-uppercase mb-0">Dc Merchandise</h4>
            </div>
            <div class="item d-flex align-items-center gap-3">
                <div class="logo">
                    <img src="./img/buy-comics-subscriptions.png" alt="">
                </div>
                <h4 class="text-uppercase mb-0">subscriptions</h4>
            </div>
            <div class="item d-flex align-items-center gap-3">
                <div class="logo">
                    <img src="./img/buy-comics-shop-locator.png" alt="">
                </div>
                <h4 class="text-uppercase mb-0">comics shop locator</h4>
            </div>
            <div class="item d-flex align-items-center gap-3">
                <div class="logo">
                    <img src="./img/buy-dc-power-visa.svg" alt="">
                </div>
                <h4 class="text-uppercase mb-0">dc power visa</h4>
            </div>
        </div>
    </div>
</div>
@include('partials.links')
@endsection
