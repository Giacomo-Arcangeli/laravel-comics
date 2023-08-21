@extends('layouts.main')

@section('title', 'Home')

@section('main-content')

    <main class="main">
        <figure></figure>
        <!-- top -->
        <section class="section-top">
            <div class="container">
                <h2 class="series">CURRENT SERIES</h2>
            </div>
            <div class="card-container container">
                @foreach ($comics as $comic)
                    <div class="card">
                        <a href="{{ route('comic', $loop->index) }}">
                            <img class="comic-fig" src="{{ $comic['thumb'] }}">
                            <h4>{{ $comic['title'] }}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="container center">
                <h3 class="load">LOAD MORE</h3>
            </div>

        </section>

        <!-- bottom -->
        <section class="section-bottom">
            <ul class="container center">
                <li>
                    <img class="small" src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                    <a href="#">DIGITAL COMICS</a>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    <a href="#">DC MERCHANDISE</a>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    <a href="#">SUBSCRIPTION</a>
                </li>
                <li>
                    <img class="small" src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    <a href="#">COMIC SHOP LOCATOR</a>
                </li>
                <li>
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                    <a href="#">DC POWER VISA</a>
                </li>
            </ul>
        </section>
    </main>

@endsection
