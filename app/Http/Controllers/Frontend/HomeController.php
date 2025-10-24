<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\SetMenu;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $about = About::first();
        $menus = Menu::latest()->take(4)->get();
        $categories = Category::with('menus')->get();
        $set_menus = SetMenu::latest()->take(4)->get();
        $galleries = Gallery::orderBy('id', 'asc')->latest()->take(4)->get();
        $blogs = Blog::latest()->take(3)->get();
        $videos = Video::latest()->take(3)->get();
        return view('frontend.pages.home', compact('sliders', 'about', 'menus', 'categories', 'set_menus', 'galleries', 'blogs', 'videos'));
    }
}
