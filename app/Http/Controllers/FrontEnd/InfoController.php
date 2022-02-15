<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

class InfoController extends BaseFrontEndController
{
    public function getInfo()
    {
        return view('frontend.info.info', ['info' => 1111]);
    }
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
