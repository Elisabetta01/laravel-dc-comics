@extends('layouts.app')

@section('title')
    laravel dc comics | Comics Index
@endsection

@section('content')

        <div class="current-series container mt-4">CURRENT SERIES</div>

        <div class="container-card">
            @foreach( $comics as $element )
                <div class="card" style="width: 15rem;">
                <a href="/comics/{{$element['id']}}">
                    <img src="{{ $element['thumb'] }}" class="card-img-top" alt="{{$element['title']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$element['title']}}</h5>
                    </div>
                </a>
                </div>
            @endforeach  

        </div>

@endsection