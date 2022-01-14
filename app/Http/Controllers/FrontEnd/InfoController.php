<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

class InfoController extends BaseFrontEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.info.index');
    }
}
