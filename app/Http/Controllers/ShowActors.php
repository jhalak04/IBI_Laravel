<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ShowActors extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actors = DB::select('SELECT
                                            a.name, m.movie_name
                                        FROM
                                            actors AS a
                                                INNER JOIN
                                            movies AS m ON m.actor_id = a.id;');

        return view('welcome',compact('actors'));
    }

    public function showStarWarsActors(Request $request)
    {
        $searchValue = $request->input('search');
        if (!empty($searchValue)) {
            $response = Http::get('https://swapi.dev/api/people');
            $jsonData = $response->json();
            $starWarsData =  array_filter(
                $jsonData['results'],
                function ($item) use ($searchValue) {
                    return (str_contains($item['name'], $searchValue)) ? $item : [];
                }
            );
            return view('starwars',compact('starWarsData'));
        }
        return view('starwars');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actor $actor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
