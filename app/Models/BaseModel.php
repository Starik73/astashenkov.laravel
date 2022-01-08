<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * Get ImgName for blog
     *
     * @param  mixed $request
     * @return string
     */
    protected static function getImgName($id, $extension)
    {
        return "image_{$id}.{$extension}";
    }
}
