<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;
use App\Models\Property; // Ensure the Property model is imported

class FacilitySeeder extends Seeder
{
    public function run()
    {
        $facilitiesProperty1 = [
            '24-hour Security',
            'Convenience Store',
            'Entertainment Room',
            'Grill Pits',
            'Jogging/Biking Path',
            'Laundry Station',
            'Main Entrance Gate',
            'Perimeter Fence',
            'Pool Shower Area',
            'Provision for CCTV Cameras',
            'Standby Electric Generator',
            'Water Station'
        ];
        // Array of facilities for Property ID 1
        $facilitiesProperty2 = [
            '24-hour Security',
            'Arrival Court',
            'Convenience Store',
            'Entertainment Room',
            'Fitness Gym',
            'Function Hall',
            'Game Room',
            'Gazebo/Cabana',
            'Grill Pits',
            'Landscaped Gardens',
            'Laundry Station',
            'Main Entrance Gate',
            'Open Lawn/Picnic Grove',
            'Perimeter Fence',
            'Pool Deck',
            'Pool Shower Area',
            'Pool Water Slides',
            'Provision for CCTV Cameras',
            'View Deck',
            'Standby Electric Generator',
            'Water Station',
            'WiFi Access',
            'Sky Promenade'
        ];

        $property1 = Property::where('name', 'Anissa Heights')->first(); // Ensure this matches your property name
        $property2 = Property::where('name', 'Allegra Garden Place')->first(); // Update this to your second property name

        // Check if properties exist before adding facilities
        if ($property1) {
            foreach ($facilitiesProperty1 as $facilityName) {
                Facility::create(['property_id' => $property1->id, 'name' => $facilityName]);
            }
        }

        if ($property2) {
            foreach ($facilitiesProperty2 as $facilityName) {
                Facility::create(['property_id' => $property2->id, 'name' => $facilityName]);
            }
        }
    }
}
