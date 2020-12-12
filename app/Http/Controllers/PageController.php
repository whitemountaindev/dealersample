<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class PageController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();

        return view ('welcome')->with(['vehicles' => $vehicles]);
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
