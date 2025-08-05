<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        $sliders = Slider::where('status', true)->get();
        $about = About::where('status', true)->first();
        return view('frontend.pages.about', compact('sliders', 'about'));
    }
}
