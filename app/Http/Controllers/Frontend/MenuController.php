<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display all menu.
     */
    public function index()
    {
        $categories = Category::with('menus')->get();
        return view('frontend.pages.menu', compact('categories'));
    }

    /**
     * Display set menu page.
     */
    public function setMenu() 
    {
        return view('frontend.pages.set_menu');
    }

    /**
     * Display menu detail.
     */
    public function menuDetail()
    {
        return view('frontend.pages.product_detail');
    }
}
