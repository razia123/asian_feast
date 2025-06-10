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
}
