<?php

namespace App\Http\Controllers;

use App\Models\ShortURL;
use Illuminate\Http\Request;

class ShortlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['urls' => ShortURL::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|url',
            'description' => 'required|string',
        ]);

        ShortURL::create(array_merge(
            $validated,
            ['slug' => hash('crc32b', $validated['url'] . now())]
        ));

        return to_route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShortURL  $shortURL
     * @return \Illuminate\Http\Response
     */
    public function show(ShortURL $shortURL)
    {
        return view('show', compact('shortURL'));
    }
}
