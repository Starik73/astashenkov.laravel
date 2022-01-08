<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Blog;

class SiteController extends BaseFrontEndController
{
    public function index()
    {
        $blogs = Blog::orderByDesc('id')
            ->paginate(self::ITEMS_PER_PAGE);

        return view('frontend.site.index', compact('blogs'));
    }
}
