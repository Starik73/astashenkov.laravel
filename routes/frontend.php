<?php

use App\Http\Controllers\FrontEnd\SiteController;
use App\Http\Controllers\FrontEnd\BlogController;
use App\Http\Controllers\FrontEnd\CoursesController;
use App\Http\Controllers\FrontEnd\Courses\HtmlController;
use App\Http\Controllers\FrontEnd\Courses\CssController;
use App\Http\Controllers\FrontEnd\Courses\JsController;
use App\Http\Controllers\FrontEnd\Courses\PhpController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\GameController;
use App\Http\Controllers\FrontEnd\InfoController;
use Illuminate\Support\Facades\Route;

// SiteController
Route::get('/', [SiteController::class, 'index'])
    ->name('index');

// BlogController
Route::get('/blog', [BlogController::class, 'index'])
    ->name('blog');

Route::get('/blog/post/{id}', [BlogController::class, 'show'])
    ->name('single_post');

// CoursesController
Route::get('/courses', [CoursesController::class, 'index'])
    ->name('courses');
// Courses prefix
Route::prefix('courses')->group(function () {
    // Html
    Route::get('/html', [HtmlController::class, 'index'])
        ->name('courses.html');
    Route::get('/html/{id}', [HtmlController::class, 'show'])
        ->name('courses.html_lesson');
    // Css
    Route::get('/css', [CssController::class, 'index'])
        ->name('courses.css');
    Route::get('/css/{id}', [CssController::class, 'show'])
        ->name('courses.css_lesson');
    // Js
    Route::get('/js', [JsController::class, 'index'])
        ->name('courses.js');
    Route::get('/js/{id}', [JsController::class, 'show'])
        ->name('courses.js_lesson');
    // Php
    Route::get('/php', [PhpController::class, 'index'])
        ->name('courses.php');
    Route::get('/php/{id}', [PhpController::class, 'show'])
        ->name('courses.php_lesson');
});

// InfoController
Route::get('/info', [InfoController::class, 'index'])
    ->name('info');

// GameController
Route::get('/game', [GameController::class, 'index'])
    ->name('game');

// ShopController
Route::get('/shop', [ShopController::class, 'index'])
    ->name('shop');

// ContactController
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');
