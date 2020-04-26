<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Service3Request;
use App\Service2;
use App\Service3;

class Service3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services2 = Service2::all();
        $services3 = Service3::all();

        return view('admin.service2.index', compact('services2', 'services3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service2.service3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Service3Request $request)
    {
        $service3 = new Service3();
        $service3->icon = request('icon');
        $service3->titre = request('titre');
        $service3->description = request('description');
        $service3->save();

        return redirect()->route('service3.index');
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
        $service3 = Service3::find($id);

        return view('admin.service2.service3.edit', compact('service3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Service3Request $request, $id)
    {
        $service3 = Service3::find($id);
        $service3->icon = request('icon');
        $service3->titre = request('titre');
        $service3->description = request('description');
        $service3->save();

        return redirect()->route('service3.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service3 = Service3::find($id);
        Storage::delete($service3);
        $service3->delete();

        return redirect()->back();
    }
}
