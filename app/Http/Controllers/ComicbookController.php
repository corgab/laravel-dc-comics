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
        //
        dump('Metodo store');
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
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
