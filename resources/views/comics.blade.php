@extends('layouts.template')

@section('page-title', 'DC Comics | Home')

@section('main-content')
    <section class="comics-main">
        <div class="hero">
            <img src="{{ asset('img/jumbotron.jpg') }}" alt="Jumbotron">
        </div>
        <div class="comics">
            <div class="comics-container">
                <a href="/" class="button">Current Series</a>
                @foreach ($comics as $comic)                    
                <div class="card">
                    <div class="img-box">
                        <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] . $comic['thumb'] }}">
                    </div>
                    <p>{{ $comic['title'] }}</p>
                </div>
                @endforeach
            </div>
            <a href="/" class="button">Current Series</a>
        </div>
    </section>
@endsection