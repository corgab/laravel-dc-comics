<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comicbook;

class ComicbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsbooks = Comicbook::all();

        return view('comicsbooks.index', compact('comicsbooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comicsbooks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $form_data = $request->all();

        $new_book = new Comicbook();

        $new_book->title = $form_data['title'];
        $new_book->description = $form_data['description'];
        $new_book->sale_date = $form_data['sale_date'];

        $new_book->save();

        return redirect()->route('comicsbooks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comicbook $comicsbook)
    {
        return view('comicsbooks.show', compact('comicsbook'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Comicbook $comicsbook)
    {
        return view('comicsbooks.edit', compact('comicsbook'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, Comicbook $comicsbook)
    {
        $form_data = $request->all();

        $comicsbook->update($form_data);

        return to_route('comicsbooks.show', $comicsbook);

    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Comicbook $comicsbook)
    {
        $comicsbook->delete();

        return to_route('comicsbooks.index');
    }
}
