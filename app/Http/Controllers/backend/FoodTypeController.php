<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodTypeController extends Controller
{
    /**
     * Display food type list.
     */
    public function index()
    {
        return view('backend.food-type.index');
    }

    /**
     * Display food type create form.
     */
    public function create()
    {
        return view('backend.food-type.create');
    }
}
