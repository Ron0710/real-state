<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function search(Request $request)
    {
        $input = $request->input('input'); // Change to match your query parameter

        // Fetch locations that match the input
        $locations = Location::where('name', 'LIKE', '%' . $input . '%')->get();

        return response()->json($locations);
    }
}