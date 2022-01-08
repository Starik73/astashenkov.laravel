<?php

namespace App\Http\Controllers\FrontEnd;

class ContactController extends BaseFrontEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.contact.index');
    }
}
