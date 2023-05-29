<header class="bg-white">
    <div class="container d-flex justify-content-between">
        <div class="logo d-flex align-items-center">
            <a href="{{route('home')}}"><img src="/img/dc-logo.png" alt=""></a>
        </div>
        <ul class="d-flex justify-content-between gap-2">
            <li class="text-uppercase"><a href="#">Characters</a></li>
            <li class="text-uppercase @if(request()->is('*comics')) {{'active'}}@endif"><a href="{{-- /comics --}}{{route('comics.index')}}">Comics</a></li>
            <li class="text-uppercase"><a href="#">Movies</a></li>
            <li class="text-uppercase"><a href="#">Tv</a></li>
            <li class="text-uppercase"><a href="#">Games</a></li>
            <li class="text-uppercase"><a href="#">Collectibles</a></li>
            <li class="text-uppercase"><a href="#">Videos</a></li>
            <li class="text-uppercase"><a href="#">Fans</a></li>
            <li class="text-uppercase"><a href="#">News</a></li>
            <li class="text-uppercase"><a href="#">Shop</a></li>
        </ul>
    </div>
</header>


