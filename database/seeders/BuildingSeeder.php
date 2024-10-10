<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Building;
use App\Models\Property; // Ensure the Property model is imported

class BuildingSeeder extends Seeder
{
    public function run()
    {
        // Define an array of buildings to be created
        $buildings = [
            [
                'property_name' => 'Anissa Heights',
                'name' => 'Anissa Heights',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 29,
                'basement_parking_levels' => 5,
                'path'=> 'assets/Location/Anissa Heights/Building/Anissa Heights Building.jpg',
            ],
            [
                'property_name' => 'Allegra Garden Place',
                'name' => 'Amina',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 55,
                'basement_parking_levels' => 5,
                'path'=>'assets/Location/Allegra Garden Place/Building/Amina Building.jpg',
            ],
            [
                'property_name' => 'Allegra Garden Place',
                'name' => 'Soraya',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 55,
                'basement_parking_levels' => 5,
                'path'=>'assets/Location/Allegra Garden Place/Building/Soraya Building.jpg',
            ],
            [
                'property_name' => 'Fortis Residence',
                'name' => 'Fortis Residence',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 36,
                'basement_parking_levels' => null,
                'path'=>'assets/Location/Fortis Residences/Building/Fortis Residence Building.jpg',
            ],
            [
                'property_name' => 'Moncello Crest',
                'name' => 'Blanca',
                'development_type' => 'Leisure Residences',
                'residential_levels' => 18,
                'basement_parking_levels' => 4,
                'path' =>'assets/Location/Moncello Crest/Building/Blanca Building.jpg',
            ],
            [
                'property_name' => 'Moncello Crest',
                'name' => 'Silva',
                'development_type' => 'Leisure Residences',
                'residential_levels' => 2,
                'basement_parking_levels' => null, // Set to null if there's no value
            ],
            [
                'property_name' => 'Moncello Crest',
                'name' => 'Ciela',
                'development_type' => 'Leisure Residences',
                'residential_levels' => 20,
                'basement_parking_levels' => 9,
                'path' =>'assets/Location/Moncello Crest/Building/Ciela Building.jpg',
            ],
            [
                'property_name' => 'Mulberry Place',
                'name' => 'Shantung',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 18,
                'basement_parking_levels' => null, // No basement parking specified
                'path'=>'assets/Location/Mulberry Place/Building/Shantung Building.jpg',
            ],
            [
                'property_name' => 'Mulberry Place',
                'name' => 'Bengaline',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => 6,
                'basement_parking_levels' => 2,
                'path'=>'assets/Location/Mulberry Place/Building/Bengaline Building.jpg',
            ],
            [
                'property_name' => 'Mulberry Place',
                'name' => 'Cochine',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => 6,
                'basement_parking_levels' => 2,
                'path'=>'assets/Location/Mulberry Place/Building/Cochine Building.jpg',
            ],
            [
                'property_name' => 'Mulberry Place',
                'name' => 'Dui',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => 6,
                'basement_parking_levels' => 2,
                'path'=>'assets/Location/Mulberry Place/Building/Dui Building.jpg',
            ],
            [
                'property_name' => 'Mulberry Place',
                'name' => 'Paisley',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 6,
                'basement_parking_levels' => null, // No basement parking specified
                'path'=>'assets/Location/Mulberry Place/Building/Paisley Building.jpg',
            ],
            [
                'property_name' => 'Mulberry Place',
                'name' => 'Marcelline',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => 6,
                'basement_parking_levels' => 2,
                'path'=>'',
            ],
            [
                'property_name' => 'Oak Harbor Residences',
                'name' => 'Lauderdale',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => 14,
                'basement_parking_levels' => 1,
                'podium_parking_levels' => 1,
                'lower_ground_floor_parking_levels' => 1,
                'path'=>'assets/Location/Oak Harbor Residences/Building/Lauderdale Building.jpg',
            ],
            [
                'property_name' => 'Oak Harbor Residences',
                'name' => 'Westport',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => 12,
                'basement_parking_levels' => 1,
                'podium_parking_levels' => 1,
                'lower_ground_floor_parking_levels' => null, // Not specified
                'path'=>'assets/Location/Oak Harbor Residences/Building/Westport Building.jpg',
            ],
            [
                'property_name' => 'Oak Harbor Residences',
                'name' => 'Aston',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => 12,
                'basement_parking_levels' => 1,
                'podium_parking_levels' => 1,
                'lower_ground_floor_parking_levels' => null, // Not specified
                'path'=>'assets/Location/Oak Harbor Residences/Building/Aston Building.jpg',
            ],
            [
                'property_name' => 'One Delta Terraces',
                'name' => 'One Delta Terraces',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 51,
                'basement_parking_levels' => 6,
                'podium_parking_levels' => 4,
                'path'=>'assets/Location/One Delta Terraces/One Delta Terraces View.jpg',
            ],
            [
                'property_name' => 'Prisma Residence',
                'name' => 'Astra',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 42,
                'basement_parking_levels' => 6,
                'path'=>'assets/Location/Prisma Residences/Building/Astra Building.jpg',
            ],
            [
                'property_name' => 'Prisma Residence',
                'name' => 'Celeste',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 41,
                'basement_parking_levels' => 6,
                'path'=>'assets/Location/Prisma Residences/Building/Celeste Building.jpg',
            ],
            [
                'property_name' => 'Prisma Residence',
                'name' => 'Kiran',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 45,
                'basement_parking_levels' => 6,
                'path'=>'',
            ],
            [
                'property_name' => 'Sage Residence',
                'name' => 'Sage Residence',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 49,
                'basement_parking_levels' => 8,
                'path'=>'assets/Location/Sage Residences/Building/Sage Residence Building.jpg',
            ],
            [
                'property_name' => 'Satory Residence',
                'name' => 'Hacana',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 14,
                'basement_parking_levels' => 2,
                'path'=>'assets/Location/Satori Residences/Building/Hacana Building.jpg',
            ],
            [
                'property_name' => 'Satory Residence',
                'name' => 'Lana',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 15,
                'basement_parking_levels' => 2,
                'path'=>'assets/Location/Satori Residences/Building/Lana Building.jpg',
            ],
            [
                'property_name' => 'Satory Residence',
                'name' => 'Rahu',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 14,
                'basement_parking_levels' => 2,
                'path'=>'assets/Location/Satori Residences/Building/Rahu Building.jpg',
            ],
            [
                'property_name' => 'Satory Residence',
                'name' => 'Yasu',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 15,
                'basement_parking_levels' => 2,
                'path'=>'assets/Location/Satori Residences/Building/Yasu Building.jpg',
            ],
            [
                'property_name' => 'Satory Residence',
                'name' => 'Amani',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 15,
                'basement_parking_levels' => 1,
                'path'=>'assets/Location/Satori Residences/Building/Amani Building.jpg',
            ],
            [
                'property_name' => 'Solmera Coast',
                'name' => 'Matahari',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => 6,
                'basement_parking_levels' => 1,
                'podium_parking_levels' => 5,
                'path'=>'assets/Location/Solmera Coast/Building/Matahari Building.jpg',
            ],
            [
                'property_name' => 'Solmera Coast',
                'name' => 'Kartika',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => 6,
                'basement_parking_levels' => 1,
                'path'=>'',
            ],
            [
                'property_name' => 'Solmera Coast',
                'name' => 'Bumi',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => null,
                'basement_parking_levels' => null,
                'podium_parking_levels' => null,
                'path'=>'',
            ],
            [
                'property_name' => 'Solmera Coast',
                'name' => 'Asri',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => null,
                'basement_parking_levels' => null,
                'podium_parking_levels' => null,
                'path'=>'',
            ],
            [
                'property_name' => 'Solmera Coast',
                'name' => 'Nusa',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => null,
                'basement_parking_levels' => null,
                'podium_parking_levels' => null,
                'path'=>'',
            ],
            [
                'property_name' => 'Sonora Garden Residences',
                'name' => 'Cadence',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 39,
                'commercial_levels' => 1,
                'basement_parking_levels' => 4,
                'podium_parking_levels' => null,
                'path'=>'assets/Location/Sonora Garden Residence/Building/Cadence.jpg',
            ],
            [
                'property_name' => 'Sonora Garden Residences',
                'name' => 'Liran',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 41,
                'commercial_levels' => 1,
                'basement_parking_levels' => 4,
                'podium_parking_levels' => null,
                'path'=>'assets/Location/Sonora Garden Residence/Building/Liran.jpg',
            ],
            [
                'property_name' => 'Sonora Garden Residences',
                'name' => 'Stellan',
                'development_type' => 'Mid Rise Condominiums',
                'residential_levels' => 15,
                'basement_parking_levels' => 4,
                'podium_parking_levels' => null,
                'path'=>'assets/Location/Sonora Garden Residence/Building/Stellan.jpg',
            ],
            [
                'property_name' => 'The Atherton',
                'name' => null, // No buildings to add
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => null,
                'commercial_levels' => null,
                'basement_parking_levels' => null,
                'podium_parking_levels' => null,
                'path'=>'',
            ],
            [
                'property_name' => 'The Calinea Tower',
                'name' => 'The Calinea Tower',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 48,
                'commercial_levels' => 1,
                'basement_parking_levels' => null,
                'podium_parking_levels' => 10,
                'path'=>'assets/Location/The Calinea Tower/Building/The Calinea Tower Building.jpg',
            ],
            [
                'property_name' => 'The Campden Place',
                'name' => 'The Campden Place',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 27,
                'commercial_levels' => null,
                'basement_parking_levels' => null,
                'podium_parking_levels' => 5,
                'path'=>'assets/Location/The Camden Place/Building/The Camden Place Building.jpg',
            ],
            [
                'property_name' => 'The Crestmont',
                'name' => 'The Crestmont',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 49,
                'commercial_levels' => null,
                'basement_parking_levels' => 7,
                'podium_parking_levels' => null,
                'path'=>'assets/Location/The Cresmont/Building/The Crestmont Building.jpg',
            ],
            [
                'property_name' => 'The Erin Heights',
                'name' => 'The Erin Heights',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 54,
                'commercial_levels' => null,
                'basement_parking_levels' => 8,
                'podium_parking_levels' => null,
                'path'=>'',
            ],
            [
                'property_name' => 'The Erin Heights',
                'name' => 'The Erin Heights',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 54,
                'commercial_levels' => null,
                'basement_parking_levels' => 8,
                'podium_parking_levels' => null,
                'path'=>'assets/Location/The Erin Heights/Building/The Erin Heights Building.jpg',
            ],
            [
                'property_name' => 'The Valeron Tower',
                'name' => 'The Valeron Tower',
                'development_type' => 'High Rise Condominiums',
                'residential_levels' => 48,
                'commercial_levels' => 1,
                'basement_parking_levels' => 2,
                'podium_parking_levels' => 6,
                'path'=>'',
            ],
            
            
        ];

        // Loop through the buildings array and create each building
        foreach ($buildings as $buildingData) {
            $property = Property::where('name', $buildingData['property_name'])->first();

            if ($property) {
                Building::create([
                    'property_id' => $property->id,
                    'name' => $buildingData['name'],
                    'development_type' => $buildingData['development_type'],
                    'residential_levels' => $buildingData['residential_levels'] ?? null,
                    'basement_parking_levels' => $buildingData['basement_parking_levels'] ?? null,
                    'podium_parking_levels' => $buildingData['podium_parking_levels'] ?? null,
                    'lower_ground_floor_parking_levels' => $buildingData['lower_ground_floor_parking_levels'] ?? null,
                ]);
            }
        }
    }
}