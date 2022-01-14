<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Blog;

class BlogController extends BaseFrontEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderByDesc('id')
            ->paginate(self::ITEMS_PER_PAGE);
        return view('frontend.blog.index', compact('blogs'))->with('success', 'string');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id blog_id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('frontend.blog.show', compact('blog'));
    }
}
