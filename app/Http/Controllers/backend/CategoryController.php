<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\Backend\CategoryService;

class CategoryController extends Controller
{
    /**
     * Display Category List.
     */
    public function index()
    {
        $categories = Category::get();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * 
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * 
     */
    public function store(CategoryRequest $request, CategoryService $categoryService)
    {
        if($categoryService->storeCategory($request->all())){
            return redirect()->back();
        }
    }
}

