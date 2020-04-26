<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Contact2Request;
use App\Contact2;
use App\Contact1;

class Contact2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts2 = Contat2::all();
        $contacts1 = Contact1::all();
        
        return view('admin.contact.index', compact('contacts1', 'contacts2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.contact2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Contact2Request $request)
    {
        $contact2 = new Contact2();
        $contact2->icon_address = request('iconAddress');
        $contact2->titre_address = request('titreAddress');
        $contact2->address = request('address');

        $contact2->icon_email = request('iconEmail');
        $contact2->titre_email = request('titreEmail');
        $contact2->email = request('email');

        $contact2->icon_phone = request('iconPhone');
        $contact2->titre_phone = request('titrePhone');
        $contact2->phone = request('phone');

        return redirect()->route('contact2.index');
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
        $contact2 = Contact2::find($id);

        return view('admin.contact.contact2.edit', compact('contact2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contact2Request $request, $id)
    {
        $contact2 = Contact2::find($id);

        return redirect()->route('contact2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact2 = Contact2::find($id);
        Storage::delete($contact2);
        $contact2->delete();

        return redirect()->back();
    }
}
