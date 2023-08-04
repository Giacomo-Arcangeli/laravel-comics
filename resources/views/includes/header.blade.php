<?php $links = config('header_links'); ?>


<header class="container">
    <a href="{{ route('home') }}"><img src="{{ asset('images/dc-logo.png') }}" alt=""></a>
    <nav>
        <ul>
            @foreach ($links as $link)
                <li><a href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
            @endforeach
            <li>TV</li>
            <li>Games</li>
            <li>Collectibles</li>
            <li>Videos</li>
            <li>Fans</li>
            <li>News</li>
            <li>Shop</li>
        </ul>
    </nav>
</header>
