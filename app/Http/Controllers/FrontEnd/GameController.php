<?php

namespace App\Http\Controllers\FrontEnd;

class GameController extends BaseFrontEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.game.index');
    }
}
