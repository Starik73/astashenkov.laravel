<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Blog extends BaseModel
{
    use HasFactory;

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'blog';

    public const VALIDATE = [
        'title'       => ['required', 'string'],
        'author'      => ['required', 'string'],
        'h2'          => ['required', 'string'],
        'content'     => ['required', 'string'],
        'description' => ['required', 'string'],
        'keywords'    => ['required', 'string'],
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'title',
        'author',
        'h2',
        'content',
        'img',
        'description',
        'keywords',
    ];
}
