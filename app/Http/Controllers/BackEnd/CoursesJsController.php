<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Js;
use Illuminate\Http\Request;

class CoursesJsController extends BaseBackEndController
{
    /**
     * Base update route name for add/update new post
     *
     * @var string
     */
    private static $update_route_name = 'backend.js_update';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Js::paginate(self::ITEMS_PER_PAGE);
        return view('backend.courses.js.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update_route_name = self::$update_route_name;
        if (!empty($id)) {
            // Update
            $blog = Js::findOrFail($id);

            return view('backend.courses.js.update', compact('blog', 'update_route_name'));
        } else {
            // New
            return view('backend.courses.js.update', compact('update_route_name'));
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
        $request->validate(Js::VALIDATE);
        $update_route_name = self::$update_route_name;

        if($request->hasFile('blog_image')) {
            //Upload File
            if (!empty($request->id) && $request->id != 0) {
                $id = $request->id;
            } else {
                $id = Js::count() + 1;
            }
            $path = $request->file('blog_image')->storeAs(
                'js',
                Js::getImgName($id, $request->file('blog_image')->extension())
            );
            if (!empty($path)) {
                $path = self::IMG_PATH . $path;
            }
        }
        if (!empty($request->id) && $request->id != 0) {
            $blog = Js::findOrFail($request->id);
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
            $blog = Js::create([
                'title'       => $request->title,
                'author'      => $request->author,
                'h2'          => $request->h2,
                'content'     => $request->content,
                'img'         => $path ?? $request->blog_img,
                'description' => $request->description,
                'keywords'    => $request->keywords,
            ]);
        }

        return view('backend.courses.js.update', compact('blog', 'update_route_name'));
    }

    /**
     * Delete by id
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
    }
}
