<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Contact1Request;
use App\Contact1;
use App\Contact2;

class Contact1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts1 = Contact1::all();
        $contacts2 = Contact2::all();

        return view('admin.contact.index', compact('contacts1', 'contacts2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Contact1Request $request)
    {
        $contact1 = new Contact1();
        $contact1->description = request('description');
        $contact1->save();

        return redirect()->route('contact1.index');
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
        $contact1 = Contact1::find($id);
        
        return view('admin.contact.edit', compact('contact1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contact1Request $request, $id)
    {
        $contact1 = Contact1::find($id);
        $contact1->description = request('description');
        $contact1->save();

        return redirect()->route('contact1.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact1 = Contact1::find($id);
        Storage::delete($contact1);
        $contact1->delete();

        return redirect()->back();
    }
}
