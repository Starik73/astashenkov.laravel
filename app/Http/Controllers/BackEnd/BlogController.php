<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends BaseBackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(self::ITEMS_PER_PAGE);
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!empty($id)) {
            // Update
            $blog = Blog::findOrFail($id);

            return view('backend.blog.update', compact('blog'));
        } else {
            // New
            return view('backend.blog.update');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Blog::VALIDATE);

        if($request->hasFile('blog_image')) {
            //Upload File
            if (!empty($request->id) && $request->id != 0) {
                $id = $request->id;
            } else {
                $id = Blog::count() + 1;
            }

            $path = $request->file('blog_image')->storeAs(
                'blog',
                Blog::getImgName($id, $request->file('blog_image')->extension())
            );
            if (!empty($path)) {
                $path = self::IMG_PATH . $path;
            }
        }

        if (!empty($request->id) && $request->id != 0) {
            $blog = Blog::findOrFail($request->id);
            $blog->update([
                'title'       => $request->title,
                'author'      => $request->author,
                'h2'          => $request->h2,
                'content'     => $request->content,
                'img'         => $path ?? $request->img,
                'description' => $request->description,
                'keywords'    => $request->keywords,
            ]);
            $text = 'Обновлена запись #' . $blog->id;
        } else {
            $blog = Blog::create([
                'title'       => $request->title,
                'author'      => $request->author,
                'h2'          => $request->h2,
                'content'     => $request->content,
                'img     '    => $path ?? $request->img,
                'description' => $request->description,
                'keywords'    => $request->keywords,
            ]);
            $text = 'Создана новая запись';
        }

        return redirect()->route('backend.blog_form', ['id' => $blog->id])->with('success', $text);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }
}
