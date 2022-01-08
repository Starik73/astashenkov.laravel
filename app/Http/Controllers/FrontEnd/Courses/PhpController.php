<?php

namespace App\Http\Controllers\FrontEnd\Courses;

use App\Http\Controllers\FrontEnd\CoursesController;
use App\Models\Php;

class PhpController extends CoursesController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Php::orderBy('id')
            ->paginate(self::ITEMS_PER_PAGE);

        return view('frontend.courses.php.index', compact('blogs'));
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
        $next = Php::where('id', '=', ($id + 1))
            ->first();
        $prev = Php::where('id', '=', ($id - 1))
            ->first();

        return view('frontend.courses.php.show', compact('blog', 'next', 'prev'));
    }
}
