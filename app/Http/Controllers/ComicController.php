<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if (!empty($request->query('search'))) {
        //     $type = $request->query('search');
        //     $products = Product::where('type', $type)->get();
        // } else {
        //     $products = Product::all();
        // }
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
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
        //salvataggio e redirezione dell'utente

        //recupero dati dal form e me li salvo in una variabile
        $form_data = $request->all();
        //dd($form_data);

        //*PRIMO MODO
            //^--> ma devo avere i campi in fillable (o il guarded) nel Model
            // $new_comic = new Comic();
            // $new_comic->fill($form_data);
            // $new_comic->save();

        //*SECONDO MODO
            // $new_comic = new Comic();
            // $new_comic->title = $form_data['title'];
            // $new_comic->description = $form_data['description'];
            // $new_comic->price = $form_data['price'];
            // $new_comic->type = $form_data['type'];
            // $new_comic->sale_date = $form_data['sale_date'];
            // $new_comic->thumb = $form_data['thumb'];
            // $new_comic->save();

        //*TERZO MODO
        //invoco metodo statico create della classe Comic, gli passo i dati --> fa tutto lui: crea, valorizza e salva in db
            //^--> ma devo avere i campi in fillable (o il guarded) nel Model
            $new_comic = Comic::create($form_data);

        //reindirizzo da qualche parte
        return redirect()->route('comics.index');
        //return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
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
        //$comic = Comic::find($comic->id);
        $form_data = $request->all();

        //*PRIMO METODO
            // $comic->title = $form_data['title'];
            // $comic->description = $form_data['description'];
            // $comic->price = $form_data['price'];
            // $comic->type = $form_data['type'];
            // $comic->sale_date = $form_data['sale_date'];
            // $comic->thumb = $form_data['thumb'];
            // $comic->update();

        //*SECONDO METODO
            //^devo avere il fillable nel model
            $comic->update($form_data);
        //reindirizzo alla show del comic modificato
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        //reindirizzo all'index
        return redirect()->route('comics.index');
    }
}
