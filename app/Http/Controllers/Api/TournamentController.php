<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tournament;

class TournamentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = Tournament::all();

        return response()->json([
            'status' => 'success',
            'tournaments' => $tournaments,
        ]);
        //return view('tournaments', compact('tournaments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required',
            'tournament_date' => 'required',
        ]);

        $tournament = Tournament::create([
            'name' => $request->name,
            'tournament_date' => $request->tournament_date,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Tournament created successfully',
            'tournament' => $tournament,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tournament = Tournament::find($id);

        return response()->json([
            'status' => 'success',
            'tournament' => $tournament,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'            => 'required',
            'tournament_date' => 'required',
        ]);

        $tournament = Tournament::find($id);
        $tournament->name = $request->name;
        $tournament->tournament_date = $request->tournament_date;
        $tournament->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Tournament updated successfully',
            'tournament' => $tournament,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tournament = Tournament::find($id);

        $tournament->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Tournament deleted successfully',
            'tournament' => $tournament,
        ]);
    }
}