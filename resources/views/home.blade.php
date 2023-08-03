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
                {{-- <ComicCard v-for="comic in comics" :key="comic.series" :comic="comic" /> --}}
                <div class="card">
                    <img class="comic-fig"
                        src="https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY"
                        alt="comic.series">
                    <h4>Action Comics</h4>
                </div>
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
