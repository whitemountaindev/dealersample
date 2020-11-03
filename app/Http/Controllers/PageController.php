<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }
    public function listingOne()
    {
        return view ('listingOne');
    }
    public function detailsOne()
    {
        return view ('detailsOne');
    }
    public function contactOne()
    {
        return view ('contactOne');
    }
}
