<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recupero i dati dal db
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // recupero i dati inseriti nel form 
        $data = $request->all();
        //quindi $data è un array associativo formato dai dati che ci sono arrivati dal form

        $comic = new Comic();

        //per far funzionare il fill devo andare nel model e creare un array protected dentro al quale inserisco i campi da assegnare con metodo fill
        $comic->fill($data);

        $comic->save();
        
        // una volta creato e inserito il nuovo comic ritorno alla vista della pagina show
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {   
        // uso la dependency injection, quindi invece di passare a show il parametro id della tabella, gli passo un'istanza del model 
        // e sarà laravel a capire quale record prendere in base a quello che gli viene passato dalla rotta, es: nell'html ho route{{'comics.show',$comic->id}}
        // Qundi anche al compact passo l'istanza del model.
    
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        // il metodo update passa i nuovi dati all'istanza del modello e aggiorna i dati nel database
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        
    }
}