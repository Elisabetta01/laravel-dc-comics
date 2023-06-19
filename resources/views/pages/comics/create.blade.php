@extends('layouts.app')

@section('title')
    laravel dc comics | Comics Create
@endsection

@section('content')

     <div class="container">

          <h1>Crea il fumetto</h1>
      
          <form action="{{ route('comics.store') }}" method="POST">
                @csfr 
      
                <div class="form-group">
                     <label for="comic-title" class="form-label">Title</label>
                     <input type="text" id="comic-title" name="title" class="form-control">
                </div>
      
                <div class="form-group">
                     <label for="comic-description" class="form-label">Description</label>
                     <textarea class="form-control" name="description" id="comic-description" cols="30" rows="10"></textarea>
                </div>
      
                <div class="form-group">
                     <label for="comic-thumb" class="form-label">Image</label>
                     <input type="text" id="comic-thumb" name="thumb"  class="form-control">
                </div>
      
                <div class="form-group">
                     <label for="comic-price" class="form-label">Price</label>
                     <input type="text" id="comic-price" name="price"  class="form-control">
                </div>
      
                <div class="form-group">
                     <label for="comic-series" class="form-label">Series</label>
                     <input class="form-control" type="text" id="comic-series" class="form-control" placeholder="Inserisci series" name="series">
                </div>
      
                <div class="form-group">
                     <label for="comic-sale_date" class="form-label">Sale date</label>
                     <input type="date" id="comic-sale_date" name="sale_date" class="form-control">
                </div>
      
                <div class="form-group">
                     <label for="comic-type" class="form-label">Type</label>
                     <input type="text" id="comic-type" name="type" class="form-control">
                </div>
      
                <button type="submit" class="btn btn-primary m-2">Crea Fumetto</button>
      
           </form>
          </div>
@endsection