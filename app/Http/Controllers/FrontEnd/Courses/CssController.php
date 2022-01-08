<?php

namespace App\Http\Controllers\FrontEnd\Courses;

use App\Http\Controllers\FrontEnd\CoursesController;
use App\Models\Php;

class CssController extends CoursesController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Php::orderByDesc('id')
            ->paginate(self::ITEMS_PER_PAGE);

        return view('frontend.courses.css.index', compact('blogs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id blog_id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Php::findOrFail($id);

        return view('frontend.courses.css.show', compact('blog'));
    }
}
