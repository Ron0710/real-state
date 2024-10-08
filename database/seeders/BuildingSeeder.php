<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Building;
use App\Models\Property; // Ensure the Property model is imported

class BuildingSeeder extends Seeder
{
    public function run()
    {
        // Retrieve properties dynamically
        $property1 = Property::where('name', 'Anissa Heights')->first(); // Ensure this matches your property name
        $property2 = Property::where('name', 'Allegra Garden Place')->first(); // Update this to your second property name

        // Add Anissa Heights
        if ($property1) {
            Building::create([
                'property_id' => $property1->id, // Using dynamic property ID
                'name' => 'Anissa Heights',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 29, // Update with the correct residential levels
                'basement_parking_levels' => 5, // Update with the correct basement parking levels
            ]);
        }

        // Add Amina
        if ($property2) {
            Building::create([
                'property_id' => $property2->id, // Using dynamic property ID
                'name' => 'Amina',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 55, // Residential levels for Amina
                'basement_parking_levels' => 5, // Basement parking for Amina
            ]);
        }

        // Add Soraya
        if ($property2) { // Assuming Soraya is also part of Allegra Garden Place
            Building::create([
                'property_id' => $property2->id, // Using dynamic property ID
                'name' => 'Soraya',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 55, // Residential levels for Soraya
                'basement_parking_levels' => 5, // Basement parking for Soraya
            ]);
        }
    }
}
