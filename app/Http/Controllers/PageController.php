<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Image;

class PageController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();

        return view ('welcome')->with(['vehicles' => $vehicles]);
    }
    public function listingOne()
    {
        $vehicles = Vehicle::with('images')->get();

        // dd($vehicles);

        return view ('listingOne')->with(['vehicles' => $vehicles]);
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
