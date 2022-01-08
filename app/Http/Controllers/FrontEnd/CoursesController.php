<?php

namespace App\Http\Controllers\FrontEnd;

class CoursesController extends BaseFrontEndController
{
    const ITEMS_PER_PAGE = 8;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.courses.index');
    }
}
