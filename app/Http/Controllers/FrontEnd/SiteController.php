<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Blog;
use Illuminate\Support\Facades\Session;

class SiteController extends BaseFrontEndController
{
    public function index()
    {
        $blogs = Blog::orderByDesc('id')
            ->paginate(self::ITEMS_PER_PAGE);
        Session::flash('error', '');
        return view('frontend.site.index', compact('blogs'));
    }
}
