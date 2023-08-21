@extends('layouts.main')
@section('scss')
    <link href="{{ Vite::asset('resources/scss/comics.details.scss') }}" rel="stylesheet" type="text/css">
@endsection

@section('main-content')
    <div class="container">
        <div class="wrapper">
            <div class="comic-details">
                <h1>{{ $comic['title'] }}</h1>
                <div class="price-and-avail">
                    <div class="left">
                        <div class="price">U.S Price: <span>{{ $comic['price'] }}</span></div>
                        <div class="availability">Available</div>
                    </div>
                    <div>Check Availability</div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <figure class="advertisement">
                <figcaption>advertisement</figcaption>
                <img src="{{ Vite::asset('resources/img/test.jpg') }}" alt="advertisement">
            </figure>
        </div>
        <div class="talent-and-specs">
            <div class="talent">
                <h3>Talent</h3>
                <div class="row">
                    <h4>Art by:</h4>
                    <div class="artists list">
                        @foreach ($comic['artists'] as $artist)
                            <a href="#">{{ $artist }},</a>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <h4>Written by:</h4>
                    <div class="writers list">
                        @foreach ($comic['writers'] as $writer)
                            <a href="#">{{ $writer }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="row">
                    <div>Series:</div>
                    <div class="series"><a href="#">{{ $comic['series'] }}</a></div>
                </div>
                <div class="row">
                    <div>U.S. Price:</div>
                    <div>{{ $comic['price'] }}</div>
                </div>
                <div class="row">
                    <div>On Sale Date:</div>
                    <div>{{ $comic['sale_date'] }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
