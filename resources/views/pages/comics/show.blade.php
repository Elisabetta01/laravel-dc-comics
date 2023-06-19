@extends('layouts.app')

@section('title')
    laravel dc comics | Comics Show
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center">
     <div class="m-4">
          <img src="{{ $singoloComic['thumb'] }}"  alt="">
     </div>
     <div>
          <h1>{{$singoloComic['title']}}</h1>
          <div class="text-center">
               <p >{{$singoloComic['description']}}</p>
               <h4>{{$singoloComic['price']}}</h4>
               <h6>{{$singoloComic['type']}}, {{$singoloComic['series']}}</h4>
               <h6>Sale Date: {{$singoloComic['sale_date']}}</h4>
          </div>
     </div>
</div>

@endsection