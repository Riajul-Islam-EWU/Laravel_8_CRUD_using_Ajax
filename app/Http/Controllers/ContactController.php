<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getIndex()
    {
        return view(view: 'contact-jquery');
    }

    public function getData()
    {
        return Contact::all();
    }

    public function postStore(Request $r)
    {
        Contact::create($r->all());
        return ['success' => true, 'message' => 'Inserted successfully'];
    }

    public function postUpdate(Request $r)
    {
        if ($r->has(key: 'id')) {
            Contact::find($r->input(key: 'id'))->update($r->all());
            return ['success' => true, 'message' => 'Updated successfully'];
        }
    }

    public function postDelete(Request $r)
    {
        if ($r->has(key: 'id')) {
            Contact::find($r->input(key: 'id'))->delete($r->all());
            return ['success' => true, 'message' => 'Deleted successfully'];
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
