@extends('layouts.main')

@section('title', $comic['title'])

@section('main-content')

    <section class="comic-detail">

        <figure></figure>

        <div class="banner"></div>

        <div class="description-box">
            <div class="box">
                <img src="{{ $comic['thumb'] }}">
            </div>
            <div class="box">
                <h1>{{ $comic['title'] }}</h1>
                <h3>Price: {{ $comic['price'] }}</h3>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="box">
                <h3>Art by:</h3>
                <p>{{ $comic['artists'][0] }}</p>
                <h3>Written by:</h3>
                <p>{{ $comic['writers'][0] }}</p>
                <h3>Series: {{ $comic['series'] }}</h3>
                <h3> On Sale Date: {{ $comic['sale_date'] }}</h3>
            </div>
        </div>

    </section>

@endsection
