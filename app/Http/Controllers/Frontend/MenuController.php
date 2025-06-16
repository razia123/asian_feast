<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display all menu.
     */
    public function index()
    {
        return view('frontend.pages.menu');
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
