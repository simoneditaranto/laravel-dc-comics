<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {

        // utilizzo la funzione 'validation'
        $this->validation($request->all());

        $newComic = new Comic();
        
        // dd($request);

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->artists;

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
    public function update(Request $request, Comic $comic)
    {
        
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->artists;

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

    // creo un metodo che si iccupa della validazione
    // e comunicazione dei messaggi di errore
    private function validation($data) {
        
        $validator = Validator::make($data, [
            'title' => 'required|max:255',
            'description' => 'nullable|max:5000',
            'thumb' => 'nullable|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:20',
            'sales_date' => 'required|date',
            'type' => 'required|max:20',
            'artists' => 'nullable|max:1000',
            'writers' => 'nullable|max:1000',
        ])->validate();

    }

}
