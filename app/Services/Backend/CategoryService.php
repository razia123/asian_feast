<?php

namespace App\Services\Backend;

use App\Models\Category;
use App\Services\FileHandler;
use Exception;
use Illuminate\Support\Str;

class CategoryService
{
    /**
     * 
     */
    public function storeCategory($request)
    {
        $imageName = null;
        if (isset($request['category_image'])) {
            $imageName = FileHandler::upload($request['category_image'], 'storage/categories');
        }
        try {
            Category::create([
                'name' => $request['category_name'],
                'slug' => Str::slug($request['category_name']),
                'type' => $request['category_type'],
                'image' => $imageName,
            ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
