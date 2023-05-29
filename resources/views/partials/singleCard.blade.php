<div class="cardWrap">
    <div class="mycard">
        <div class="mycard-img">
            <a href="{{route('comic', ['index' => $loop->index])}}"><img src="{{$card['thumb']}}" alt="{{$card['series']}}"></a>
        </div>
    </div>
    <div class="title">
        <h5>{{ $card['series'] }}</h5>
    </div>
</div>
