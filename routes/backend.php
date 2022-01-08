<?php

use App\Http\Controllers\BackEnd\BlogController;
use App\Http\Controllers\BackEnd\CoursesHtmlController;
use App\Http\Controllers\BackEnd\CoursesCssController;
use App\Http\Controllers\BackEnd\CoursesJsController;
use App\Http\Controllers\BackEnd\CoursesPhpController;
use App\Http\Controllers\BackEnd\AdminController;
use Illuminate\Support\Facades\Route;

// Admin
Route::prefix('backend')->group(function () {
    Route::get('/', [AdminController::class, 'index'])
        ->middleware(['auth'])
        ->name('backend');

    Route::name('backend.')->group(function () {
        // Blog
        Route::get('/blogs', [BlogController::class, 'index'])
            ->middleware(['auth'])
            ->name('blog');

        Route::get('/blogs/update/{id}', [BlogController::class, 'edit'])
            ->middleware(['auth'])
            ->name('blog_form');

        Route::post('/blogs/store', [BlogController::class, 'store'])
            ->middleware(['auth'])
            ->name('blog_update');

        // Courses
        Route::prefix('courses')->group(function () {
            // Html
            Route::get('/html', [CoursesHtmlController::class, 'index'])
                ->middleware(['auth'])
                ->name('html');
            Route::get('/html/update/{id}', [CoursesHtmlController::class, 'edit'])
                ->middleware(['auth'])
                ->name('html_form');
            Route::post('/html/store', [CoursesHtmlController::class, 'store'])
                ->middleware(['auth'])
                ->name('html_update');

            // Css
            Route::get('/css', [CoursesCssController::class, 'index'])
                ->middleware(['auth'])
                ->name('css');
            Route::get('/css/update/{id}', [CoursesCssController::class, 'edit'])
                ->middleware(['auth'])
                ->name('css_form');
            Route::post('/css/store', [CoursesCssController::class, 'store'])
                ->middleware(['auth'])
                ->name('css_update');

            // Js
            Route::get('/js', [CoursesJsController::class, 'index'])
                ->middleware(['auth'])
                ->name('js');
            Route::get('/js/update/{id}', [CoursesJsController::class, 'edit'])
                ->middleware(['auth'])
                ->name('js_form');
            Route::post('/js/store', [CoursesJsController::class, 'store'])
                ->middleware(['auth'])
                ->name('js_update');

            // Php
            Route::get('/php', [CoursesPhpController::class, 'index'])
                ->middleware(['auth'])
                ->name('php');
            Route::get('/php/update/{id}', [CoursesPhpController::class, 'edit'])
                ->middleware(['auth'])
                ->name('php_form');
            Route::post('/php/store', [CoursesPhpController::class, 'store'])
                ->middleware(['auth'])
                ->name('php_update');
        });
    });
});
