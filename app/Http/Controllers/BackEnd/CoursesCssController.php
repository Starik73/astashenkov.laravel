<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Css;
use Illuminate\Http\Request;

class CoursesCssController extends BaseBackEndController
{
    /**
     * Base update route name for add/update new post
     *
     * @var string
     */
    private static $update_route_name = 'backend.css_update';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Css::paginate(self::ITEMS_PER_PAGE);
        return view('backend.courses.css.index', compact('blogs'));
    }
}
