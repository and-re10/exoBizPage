<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About2Request;
use App\About2;
use App\About;

class About2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts2 = About2::all();
        $abouts = About::all();

        return view('admin.about.index', compact('abouts2', 'abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.about2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(About2Request $request)
    {
        $about2 = new About2();
        $about2->img_path = request('image')->store('image');
        $about2->icon = request('icon');
        $about2->titre = request('titre');
        $about2->description = request('description');
        $about2->save();

        return redirect()->route('about2.index');
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
        $about2 = About2::find($id);

        return view('admin.about.about2.edit', compact('about2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(About2Request $request, $id)
    {
        $about2 = About2::find($id);
        if (request('image') !== null){
            Storage::delete($about2->img_path);
            $about2->img_path = request('image')->store('image');

        };
        $about2->icon = request('icon');
        $about2->titre = request('titre');
        $about2->description = request('description');
        $about2->save();

        return redirect()->route('about2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about2 = About2::find($id);
        Storage::delete($about2->img_path);
        $about2->delete();

        return redirect()->back();
    }
}
