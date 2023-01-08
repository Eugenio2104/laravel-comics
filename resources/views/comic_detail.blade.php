@extends('layouts.main')

@section('content')
    <section class="container-comic">
        <div class="container">
            <div class="comic-plot">
                <div class="img-box">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                <div class="description">
                    <h2>{{ $comic['title'] }}</h2>
                    <p>{!! $comic['description'] !!}</p>
                    <div class="price">
                        <button>{{ $comic['price'] }}</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
