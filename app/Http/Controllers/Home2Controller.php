<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Home2Request;
use App\Home2;

class Home2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes2 = Home2::all();

        return view('admin.home.index', compact('homes2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Home2Request $request)
    {
        $home2 = new Home2();
        $home2->img_path = request('image')->store('image');
        $home2->titre  = request('titre');
        $home2->description = request('description');
        $home2->save();

        return redirect()->route('home.index');
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
        $home2 = Home2::find($id);

        return view('admin.home.edit', compact('home2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Home2Request $request, $id)
    {
        // $request->validate([
        //     'image' => 'nullable',
        //     'titre' => 'required|min:5|max:30',
        //     'description' => 'required|min:5|max:100',
        // ],
        // [
        //     'titre' => "Le titre est requis",
        //     'titre' => "Minimum, 5 caractères",
        //     'titre' => "Maximum, 30 caractères",

        //     'description' => 'La description est requise',
        //     'description' => 'Minimum, 5 caractères',
        //     'description' => 'Maximum, 100 caractères',
        // ]);

        $home2 = Home2::find($id);
        if (request('image') !== null){
            Storage::delete($home2->img_path);
            $home2->img_path = request('image')->store('image');
        };
        $home2->titre = request('titre');
        $home2->description = request('description');
        $home2->save();

        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home2 = Home2::find($id);
        Storage::delete($home2);
        $home2->delete();

        return redirect()->back();
    }
}
