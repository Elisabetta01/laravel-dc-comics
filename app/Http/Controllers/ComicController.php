<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::All();

        return view('pages.comics.index', compact('comics'));
    }

    public function create()
    {
        return view( 'pages.comics.create' );
    }

    public function store(Request $request)
    {
        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->fill();
        $newComic->save();

        return redirect()->route('comics.index');
    }

    public function show($id)
    {
        $singoloComic = Comic::findOrFail($id);

        return view('pages.comics.show', compact('singoloComic'));
    }
}


