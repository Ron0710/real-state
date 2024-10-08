<?php

namespace Database\Seeders;
use App\Models\Location; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    public function run()
    {
        $locations = [
            "Caloocan",
            "Las Pinas",
            "Makati",
            "Mandaluyong",
            "Manila",
            "Pasay",
            "Pasig",
            "Paranaque",
            "Quezon City",
            "San Juan, Batangas",
            "Taguig",
            "Tuba, Benguet"
        ];

        foreach ($locations as $location) {
            Location::create(['name' => $location]);
        }
    }
    
}
