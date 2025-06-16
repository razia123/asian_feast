<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetMenuController extends Controller
{
    /**
     * Display set menu page.
     */
    public function index()
    {
        return view('frontend.pages.set_menu');
    }
}
