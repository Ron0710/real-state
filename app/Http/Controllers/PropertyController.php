<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
class PropertyController extends Controller

    {
        public function index(Request $request)
        {
            $filter = $request->query('filter');
            $search = $request->query('search');
    
            $properties = Property::query();
    
            if ($filter && $search) {
                $properties->where($filter, 'like', "%{$search}%");
            }
    
            return response()->json($properties->get());
        }
    }