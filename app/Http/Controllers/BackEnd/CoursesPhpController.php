<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Php;
use Illuminate\Http\Request;

class CoursesPhpController extends BaseBackEndController
{
    /**
     * Base update route name for add/update new post
     *
     * @var string
     */
    private static $update_route_name = 'backend.php_update';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Php::paginate(self::ITEMS_PER_PAGE);
        return view('backend.courses.php.index', compact('blogs'));
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
            $blog = Php::findOrFail($id);

            return view('backend.courses.php.update', compact('blog', 'update_route_name'));
        } else {
            // New
            return view('backend.courses.php.update', compact('update_route_name'));
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
        $request->validate(Php::VALIDATE);

        if($request->hasFile('blog_image')) {
            //Upload File
            if (!empty($request->id) && $request->id != 0) {
                $id = $request->id;
            } else {
                $id = Php::count() + 1;
            }
            $path = $request->file('blog_image')->storeAs(
                'php',
                Php::getImgName($id, $request->file('blog_image')->extension())
            );
            if (!empty($path)) {
                $path = self::IMG_PATH . $path;
            }
        }

        if (!empty($request->id) && $request->id != 0) {
            $blog = Php::findOrFail($request->id);
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
            $blog = Php::create([
                'title'       => $request->title,
                'author'      => $request->author,
                'h2'          => $request->h2,
                'content'     => $request->content,
                'img'         => $path ?? $request->blog_img,
                'description' => $request->description,
                'keywords'    => $request->keywords,
            ]);
        }

        $update_route_name = self::$update_route_name;
        return view('backend.courses.php.update', compact('blog', 'update_route_name'));
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
