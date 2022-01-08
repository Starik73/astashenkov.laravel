<?php

namespace App\Models;

use App\Enum\CoursesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Css extends BaseModel
{
    use HasFactory;

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'css';

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
    protected $fillable = CoursesEnum::FILLABLE;
}
