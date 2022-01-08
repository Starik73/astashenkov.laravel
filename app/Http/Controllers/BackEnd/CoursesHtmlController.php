<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Html;
use Illuminate\Http\Request;

class CoursesHtmlController extends BaseBackEndController
{
    /**
     * Base update route name for add/update new post
     *
     * @var string
     */
    private static $update_route_name = 'backend.html_update';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Html::paginate(self::ITEMS_PER_PAGE);
        return view('backend.courses.html.index', compact('blogs'));
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
            $blog = Html::findOrFail($id);

            return view('backend.courses.html.update', compact('blog'));
        } else {
            // New
            return view('backend.courses.html.update');
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
        $request->validate(Html::VALIDATE);

        if($request->hasFile('blog_image')) {
            //Upload File
            if (!empty($request->id) && $request->id != 0) {
                $id = $request->id;
            } else {
                $id = Html::count() + 1;
            }
            $path = $request->file('blog_image')->storeAs(
                'html',
                Html::getImgName($id, $request->file('blog_image')->extension())
            );
            if (!empty($path)) {
                $path = self::IMG_PATH . $path;
            }
        }

        if (!empty($request->id) && $request->id != 0) {
            $blog = Html::findOrFail($request->id);
            $blog->update([
                'title'       => $request->title,
                'author'      => $request->author,
                'h2'          => $request->h2,
                'content'     => $request->content,
                'img'         => $path ?? $request->blog_img,
                'description' => $request->description,
                'keywords'    => $request->keywords,
            ]);
        } else {
            $blog = Html::create([
                'title'       => $request->title,
                'author'      => $request->author,
                'h2'          => $request->h2,
                'content'     => $request->content,
                'img'         => $path ?? $request->blog_img,
                'description' => $request->description,
                'keywords'    => $request->keywords,
            ]);
        }
        return view('backend.courses.html.update', compact('blog'));
    }
}
