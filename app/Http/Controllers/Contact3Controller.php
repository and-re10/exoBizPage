<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Contact3Request;
use App\Contact1;
use App\Contact2;
use App\Contact3;

class Contact3Controller extends Controller
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
        $contacts3 = Contact3::all();

        return view('admin.contact.index', compact('contacts1', 'contacts2', 'contacts3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Contact3Request $request)
    {
        $contact3 = new Contact3();
        $contact3->name = request('name');
        $contact3->email = request('email');
        $contact3->subject = request('subject');
        $contact3->message = request('message');
        $contact3->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact3 = Contact3::findOrFail($id);
        $contacts3 = Contact3::all();

        return view('admin.contact.contact3.show', compact('contact3', 'contacts3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contact3Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact3 = Contact3::find($id);
        Storage::delete($contact3);
        $contact3->delete();

        return redirect()->route('contact3.index');
    }
}
