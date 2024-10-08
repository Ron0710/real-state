<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

class PropertyController extends Controller

    {
        public function upload(Request $request)
        {
            // Validate the uploaded file
            $request->validate([
                'property_file' => 'required|file|mimes:txt|max:2048',
            ]);
    
            // Get the uploaded file
            $file = $request->file('property_file');
    
            // Read the file content
            $contents = file_get_contents($file);
    
            // Split content into lines
            $lines = explode("\n", trim($contents));
    
            // Initialize an array to hold property data
            $data = [];
    
            foreach ($lines as $line) {
                // Check if the line contains a colon
                if (strpos($line, ':') !== false) {
                    // Split each line into key and value
                    list($key, $value) = explode(':', $line, 2); // Use a limit of 2
                    $data[trim(strtolower(str_replace(' ', '_', $key)))] = trim($value);
                } else {
                    Log::warning("Line does not contain a colon: $line");
                }
            }
    
            // Log the extracted data
            Log::info('Extracted property data:', $data);
    
            // Check if we have the required data before creating a property
            if (isset($data['name'], $data['status'], $data['location'], $data['specific_location'])) {
                Property::create($data); // Create the property
                return redirect()->back()->with('success', 'Property uploaded successfully!');
            } else {
                Log::warning("Missing required property data: " . json_encode($data));
                return redirect()->back()->withErrors('Missing required fields.');
            }
        }
    }