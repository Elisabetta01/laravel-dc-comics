@extends('layouts.app')

@section('title')
    laravel dc comics | Comics Edit
@endsection

@section('content')

     <div class="container">

          <h1>Modifica il fumetto</h1>
      
          <form action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PUT')
      
                <div class="form-group">
                     <label for="comic-title" class="form-label">Title</label>
                     <input type="text" id="comic-title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $comic->title }}">
                     @error('title')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
              </div>
      
                <div class="form-group">
                     <label for="comic-description" class="form-label">Description</label>
                     <textarea class="form-control" name="description" id="comic-description" cols="30" rows="10">{{ old('description') ?? $comic->description }}</textarea>
                </div>
      
                <div class="form-group">
                     <label for="comic-thumb" class="form-label">Image</label>
                     <input type="text" id="comic-thumb" name="thumb"  class="form-control" value="{{ old('thumb') ?? $comic->thumb }}">
                </div>
      
                <div class="form-group">
                     <label for="comic-price" class="form-label">Price</label>
                     <input type="text" id="comic-price" name="price"  class="form-control" value="{{ old('price') ?? $comic->price }}">
                </div>
      
                <div class="form-group">
                     <label for="comic-series" class="form-label">Series</label>
                     <input type="text" id="comic-series" name="series" class="form-control" placeholder="Inserisci series" value="{{ old('series') ?? $comic->series }}">
                </div>
      
                <div class="form-group">
                     <label for="comic-sale_date" class="form-label">Sale date</label>
                     <input type="date" id="comic-sale_date" name="sale_date" class="form-control" value="{{ old('sale_date') ?? $comic->sale_date }}">
                </div>
      
                <div class="form-group">
                     <label for="comic-type" class="form-label">Type</label>
                     <input type="text" id="comic-type" name="type" class="form-control" value="{{ old('type') ?? $comic->type }}">
                </div>
      
                <button type="submit" class="btn btn-primary m-2">Modifica Fumetto</button>
      
           </form>
          </div>
@endsection