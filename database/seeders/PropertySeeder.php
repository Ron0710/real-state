<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property; 
class PropertySeeder extends Seeder
{
    public function run()
    {
        // Create properties if they don't already exist
        $properties = [
            [
                'name' => 'Anissa Heights',
                'status' => 'New',
                'location' => 'Pasay City',
                'specific_location' => 'P. Zamora St., Brgy. 101, San Roque District, Pasay City',
                'price_range' => 'PHP3,098,600 - PHP3,600,000',
                'units' => 'N/A',
                'land_area' => '4,000 sqm.',
                'development_type' => 'High Rise Condominiums',
                'architectural_theme' => 'Modern Contemporary'
            ],
            [
                'name' => 'Allegra Garden Place',
                'status' => 'Under Construction', // Updated status
                'location' => 'Pasig', // Updated location
                'specific_location' => 'Pasig Boulevard, Brgy. Bagong Ilog', // Updated specific location
                'price_range' => 'PHP4,670,020 - PHP13,388,520', // Updated price range
                'units' => '1BR, 2BR, 3BR, STUDIO', // Updated units
                'land_area' => '12,676 sqm.', // Updated land area
                'development_type' => 'High Rise Condominiums', // Updated development type
                'architectural_theme' => 'Modern with Moroccan Inspiration' // Updated architectural theme
            ],
            [
                'name' => 'Fortis Residence', // New property
                'status' => 'Under Construction', // Status
                'location' => 'Makati City', // Location
                'specific_location' => 'Chino Roces Avenue, Makati City', // Specific location
                'price_range' => 'PHP13,832,000 - PHP38,596,000', // Price range
                'units' => '1BR, 2BR, 3BR', // Units
                'land_area' => '7,200 sqm.', // Land area
                'development_type' => 'High Rise Condominiums', // Development type
                'architectural_theme' => 'Modern Contemporary' // Architectural theme
            ],
            [
                'name' => 'Moncello Crest', // New property
                'status' => 'New', // Status
                'location' => 'Tuba, Benguet', // Location
                'specific_location' => 'Sitio Bato, via Bontiway, Brgy. Poblacion, Tuba, Benguet', // Specific location
                'price_range' => 'PHP7,750,000 - PHP17,400,000', // Price range
                'units' => '1BR, 2BR, STUDIO', // Units
                'land_area' => '40,768 sqm.', // Land area
                'development_type' => 'Leisure Residences', // Development type
                'architectural_theme' => 'Modern Filipino' // Architectural theme
            ],
            [
                'name' => 'Mulberry Place', // New property
                'status' => 'Ready for Occupancy, Home Ready Promo', // Status
                'location' => 'Taguig City', // Location
                'specific_location' => 'Acacia Estates, Taguig City', // Specific location
                'price_range' => 'PHP7,301,000 - PHP25,844,000', // Price range
                'units' => '2BR, 3BR, 4BR', // Units
                'land_area' => '36,474 sqm.', // Land area
                'development_type' => 'Mid Rise Condominiums, High Rise Condominiums', // Development type
                'architectural_theme' => 'Asian Tropical Theme' // Architectural theme
            ],
            [
                'name' => 'Oak Harbor Residences', // New property
                'status' => 'Ready for Occupancy', // Status
                'location' => 'Paranaque', // Location
                'specific_location' => 'Jackson Ave. Asiaworld City, Brgy. Don Galo, Parañaque City', // Specific location
                'price_range' => 'PHP11,888,000 - PHP56,588,000', // Price range
                'units' => '1BR, 2BR, 3BR, LOFT', // Units
                'land_area' => '11,871 sqm.', // Land area
                'development_type' => 'Mid Rise Condominiums', // Development type
                'architectural_theme' => 'Asian Contemporary' // Architectural theme
            ],
            [
                'name' => 'One Delta Terraces', // New property
                'status' => 'New', // Status
                'location' => 'Quezon City', // Location
                'specific_location' => 'West Ave. corner Quezon Ave, Quezon City, Metro Manila', // Specific location
                'price_range' => 'PHP6,876,000 - PHP21,712,000', // Price range
                'units' => '2BR, 3BR, STUDIO', // Units
                'land_area' => 'N/A', // Land area
                'development_type' => 'High Rise Condominiums', // Development type
                'architectural_theme' => 'N/A' // Architectural theme
            ],
            [
                'name' => 'Prisma Residence', // New property
                'status' => 'Ready for Occupancy', // Status
                'location' => 'Pasig', // Location (assuming it's Pasig based on specific location)
                'specific_location' => 'Pasig Boulevard, Brgy. Bagong Ilog', // Specific location
                'price_range' => 'PHP4,562,000 - PHP12,174,000', // Price range
                'units' => '1BR, 2BR', // Units
                'land_area' => '20,380 sqm.', // Land area
                'development_type' => 'High Rise Condominiums', // Development type
                'architectural_theme' => 'Modern Tropical' // Architectural theme
            ],
            [
                'name' => 'Sage Residence', // New property
                'status' => 'Under Construction', // Status
                'location' => 'Mandaluyong City', // Location
                'specific_location' => 'Domingo M. Guevara and Sinag Streets, Mauway, Mandaluyong City', // Specific location
                'price_range' => 'PHP6,464,000 - PHP15,761,000', // Price range
                'units' => '1BR, 2BR, 3BR, STUDIO', // Units
                'land_area' => '5,995 sqm.', // Land area
                'development_type' => 'High Rise Condominiums', // Development type
                'architectural_theme' => 'Modern-tropical' // Architectural theme
            ],
            [
                'name' => 'Satory Residence', // New property
                'status' => 'Ready for Occupancy', // Status
                'location' => 'Pasig City', // Location
                'specific_location' => 'F. Pasco Avenue, Santolan, Pasig City', // Specific location
                'price_range' => 'PHP4,437,000 - PHP8,376,000', // Price range
                'units' => '1BR, 2BR', // Units
                'land_area' => '29,170 sqm.', // Land area
                'development_type' => 'High Rise Condominiums', // Development type
                'architectural_theme' => 'Neo-Asian Minimalist' // Architectural theme
            ],
            [
                'name' => 'Solmera Coast', // New property
                'status' => 'Under Construction', // Status
                'location' => 'San Juan, Batangas', // Location
                'specific_location' => 'Brgy. Calubcub II and Brgy. Subukin', // Specific location
                'price_range' => 'PHP6,395,000 - PHP19,321,000', // Price range
                'units' => '1BR, 2BR, STUDIO', // Units
                'land_area' => '75,367 sqm.', // Land area
                'development_type' => 'Mid Rise Condominiums, Leisure Residences', // Development type
                'architectural_theme' => 'Asian Tropical Theme' // Architectural theme
            ],





            // Add other properties as needed
        ];

        foreach ($properties as $propertyData) {
            Property::updateOrCreate(
                ['name' => $propertyData['name']], // Check for existing property by name
                $propertyData // Create or update with these attributes
            );
        }
    }
}
