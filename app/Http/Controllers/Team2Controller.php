<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Team2Request;
use App\Team2;
use App\Team1;

class Team2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams2 = Team2::all();
        $teams1 = Team1::all();

        return view('admin.team.index', compact('teams1', 'teams2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.team2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Team2Request $request)
    {
        $team2 = new Team2();
        $team2->img_path = request('image')->store('image');
        $team2->name = request('name');
        $team2->job = request('job');
        $team2->url1 = request('url1');
        $team2->url2 = request('url2');
        $team2->url3 = request('url3');
        $team2->url4 = request('url4');
        $team2->save();
        return redirect()->route('team2.index');
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
        $team2 = Team2::find($id);
        
        return view('admin.team.team2.edit', compact('team2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Team2Request $request, $id)
    {
        $team2 = Team2::find($id);
        if (request('image') !== null) {
            Storage::delete($team2->img_path);
            $team2->img_path = request('image')->store('image');
        };
        $team2->name = request('name');
        $team2->job = request('job');
        $team2->url1 = request('url1');
        $team2->url2 = request('url2');
        $team2->url3 = request('url3');
        $team2->url4 = request('url4');
        $team2->save();

        return redirect()->route('team2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team2 = Team2::find($id);
        Storage::delete($team2);
        $team2->delete();

        return redirect()->back();
    }
}
