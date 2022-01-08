<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Blog;
use App\Models\Php;

class AdminController extends BaseBackEndController
{
    public function index()
    {
        $count = [
            'blog'  => Blog::count(),
            'php'   => Php::count(),
            'js'    => 0,
            'css'   => 0,
            'html'  => 0,
        ];

        return view('backend.admin.index', compact('count'));
    }
}
