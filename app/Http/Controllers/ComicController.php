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
        $request->validate(
            [
                'title' => 'required|unique:comics|max:255'
            ],
            [
                'title.required' => 'Il Title è richiesto',
                'title.unique' => 'Il Title deve essere unico',
                'title.max' => 'Il Title supera i caratteri massimi',
            ]
        );


        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.index');

    }

    public function show($id)
    {
        $singoloComic = Comic::findOrFail($id);

        return view('pages.comics.show', compact('singoloComic'));
    }

    public function edit(Comic $comic)
    {
        return view('pages.comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $request->validate(
            [
                'title' => 'required|unique:comics|max:255'
            ],
            [
                'title.required' => 'Il Title è richiesto',
                'title.unique' => 'Il Title deve essere unico',
                'title.max' => 'Il Title supera i caratteri massimi',
            ]
        );


        $form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('comics.show', [ 'comic' => $comic->id ]);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}


