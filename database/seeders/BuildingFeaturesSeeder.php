<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingFeaturesSeeder extends Seeder
{
    public function run()
    {
        // Retrieve building IDs dynamically
        $building1 = DB::table('buildings')->where('name', 'Anissa Heights')->first(); // Adjust the name as necessary
        $building2 = DB::table('buildings')->where('name', 'Amina')->first(); // Adjust the name as necessary
        
        // Features for Anissa Heights
        $featuresBuilding1 = [
            'Fire Alarm & Automatic Sprinkler System',
            'Fire Cabinets',
            'Fire Exit',
            'Garbage Rooms',
            'Sky Patio (Lumiventt Technology)',
            'Mailbox Area',
            'Parking Space',
            'Provision for CCTV',
        ];

        // Features for Amina
        $featuresBuilding2 = [
            'Fire Alarm & Automatic Sprinkler System',
            'Fire Cabinets',
            'Fire Exit',
            'Garbage Rooms',
            'Landscaped Atriums',
            'Mailbox Area',
            'Parking Space',
            'Passenger Elevators',
            'Provision for CCTV',
        ];

        // Insert features for Building 1 (Anissa Heights)
        if ($building1) {
            foreach ($featuresBuilding1 as $feature) {
                DB::table('building_features')->insert([
                    'building_id' => $building1->id, // Foreign key to the buildings table
                    'name' => $feature,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Insert features for Building 2 (Amina)
        if ($building2) {
            foreach ($featuresBuilding2 as $feature) {
                DB::table('building_features')->insert([
                    'building_id' => $building2->id, // Foreign key to the buildings table
                    'name' => $feature,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
