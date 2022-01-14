<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Base path for the stored images
     *
     * @var string
     */
    public const IMG_PATH = 'storage/uploads/';

    /**
     * Construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('breadcrumbs');
    }
}
