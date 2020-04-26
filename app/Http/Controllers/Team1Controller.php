<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Team1Request;
use App\Team1;
use App\Team2;

class Team1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams1 = Team1::all();
        $teams2 = Team2::all();

        return view('admin.team.index', compact('teams1', 'teams2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Team1Request $request)
    {
        $team1 = new Team1();
        $team1->description = request('description');
        $team1->save();

        return redirect()->route('team1.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team1 = Team1::find($id);

        return view('admin.team.edit', compact('team1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Team1Request $request, $id)
    {
        $team1 = Team1::find($id);
        $team1->description = request('description');
        $team1->save();

        return redirect()->route('team1.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team1 = Team1::find($id);
        Storage::delete($team1);
        $team1->delete();

        return redirect()->back();
    }
}
