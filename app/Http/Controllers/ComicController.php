<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        // dd($comics);

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        // $this->validation($request->all());

        // aggiungo la validazione creata in StoreComicRequest
        $request->validated();

        // dd($request);
              
        $newComic = new Comic();
        //utilizzo il metodo fill() appena definito nel Model
        $newComic->fill($request->all());
        // dd($newComic);
        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    // al posto di passare come parametro alla funzione show() 'string $id', posso passare
    // direttamente Comic ('Comic $comic')
    public function show(Comic $comic)
    { 
        // dd($comic);

        // ritorno la vista 'show.blade.php' passando direttamente il parametro
        // $comic. questo ci permette di restituire un 'error 404' quando il comic
        // che stiamo cercando non esiste
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        
        return view('comics.edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {
        // $this->validation($request->all());
        $request->validated();
        
        $comic->update($request->all());
        // salvo l'elemento
        $comic->save();

        // reindirizzo l'utente
        return redirect()->route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        
        // elemino l'elemento $comic
        $comic->delete();

        //reindirizzo l'utente
        return redirect()->route('comics.index');

    }

    // metodo che si occupa della validazione spostato
    // in StoreComicReques

}
