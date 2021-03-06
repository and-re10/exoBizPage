<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Service1Request;
use Illuminate\Support\Facades\Storage;
use App\Service1;

class Service1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services1 = Service1::all();
        
        return view('admin.service1.index', compact('services1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Service1Request $request)
    {
        $service1 = new Service1();
        $service1->icon = request('icon');
        $service1->titre = request('titre');
        $service1->description = request('description');
        $service1->save();

        return redirect()->route('service1.index');
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
        $service1 = Service1::find($id);

        return view('admin.service1.edit', compact('service1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Service1Request $request, $id)
    {
        $service1 = Service1::find($id);
        $service1->icon = request('icon');
        $service1->titre = request('titre');
        $service1->description = request('description');
        $service1->save();

        return redirect()->route('service1.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service1 = Service1::find($id);
        Storage::delete($service1);
        $service1->delete();

        return redirect()->back();
    }
}
