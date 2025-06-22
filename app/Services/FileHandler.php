<?php

namespace App\Services;

use Illuminate\Support\Str;


class FileHandler
{
    /**
     * Image upload.
     */
    public static function upload($file, $location = 'others')
    {
        $imageName = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($location), $imageName);

        return $imageName;
    }
}
