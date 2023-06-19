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
                
                <a class="btn btn-warning" href="{{ route('comics.edit', $element) }}">Modifica</a>
                
                <form action="{{ route('comics.destroy', $element) }}" method="POST">

                    @csrf 
                    @method('DELETE')

                    <button onclick="return elimina()" type="submit" class="btn btn-danger w-100">Elimina</button>
                    
                </form>

                </div>
            @endforeach  

        </div>

@endsection

@section('scripts-custom')
    function elimina(){
        return confirm('Sei sicuro di voler eliminare il fumetto?')
    }
@endsection