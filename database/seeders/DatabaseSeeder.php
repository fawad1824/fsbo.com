<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin\propertieskind;
use App\Models\Admin\propertytype;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        $propertyTypeData = [
            ['name' => 'Apartment', 'image' => 'user/img/icon-apartment.png'],
            ['name' => 'Villa', 'image' => 'user/img/icon-villa.png'],
            ['name' => 'Home', 'image' => 'user/img/icon-house.png'],
            ['name' => 'Office', 'image' => 'user/img/icon-housing.png'],
            ['name' => 'Building', 'image' => 'user/img/icon-building.png'],
            ['name' => 'Townhouse', 'image' => 'user/img/icon-neighborhood.png'],
            ['name' => 'Shop', 'image' => 'user/img/icon-condominium.png'],
            ['name' => 'Garage', 'image' => 'user/img/icon-luxury.png'],
        ];
        foreach ($propertyTypeData as $type) {
            PropertyType::create($type);
        }

        $propertyKind = [
            ['name' => 'Residential',  'is_heading' => '1', 'is_propertykind' => '1'],
            ['name' => 'Plot',  'is_heading' => '1', 'is_propertykind' => '1'],
            ['name' => 'Commerical',  'is_heading' => '1', 'is_propertykind' => '1'],
            // Features
            ['name' => 'Primary Features',  'is_heading' => '1', 'is_propertyfeature' => '1'],
            ['name' => 'Utilities',  'is_heading' => '1', 'is_propertyfeature' => '1'],
            ['name' => 'Communication',  'is_heading' => '1', 'is_propertyfeature' => '1'],
            ['name' => 'Landmark Nearby',  'is_heading' => '1', 'is_propertyfeature' => '1'],
            ['name' => 'Secondary Features',  'is_heading' => '1', 'is_propertyfeature' => '1'],
        ];

        foreach ($propertyKind as $type) {
            propertieskind::create($type);
        }
        $propertyKind = [
            // resiential
            ['name' => 'Home',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],
            ['name' => 'Float',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],
            ['name' => 'Lower Portion',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],
            ['name' => 'Upper Portion',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],
            ['name' => 'Room',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],
            ['name' => 'Farm House',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],
            ['name' => 'Guest House',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],
            ['name' => 'Pent House',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],
            ['name' => 'Annexe',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],
            ['name' => 'Hostel',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],
            ['name' => 'Hostel Suites',  'is_heading' => '0', 'headingname' => 'Residential', 'is_headingid' => '1', 'is_propertykind' => '1'],

            // plots
            ['name' => 'Residential Plot',  'is_heading' => '0', 'headingname' => 'Plot', 'is_headingid' => '2', 'is_propertykind' => '1'],
            ['name' => 'Commercial Plot',  'is_heading' => '0', 'headingname' => 'Plot', 'is_headingid' => '2', 'is_propertykind' => '1'],
            ['name' => 'Agricultural Land',  'is_heading' => '0', 'headingname' => 'Plot', 'is_headingid' => '2', 'is_propertykind' => '1'],
            ['name' => 'Plot File',  'is_heading' => '0', 'headingname' => 'Plot', 'is_headingid' => '2', 'is_propertykind' => '1'],
            ['name' => 'Industrial Land',  'is_heading' => '0', 'headingname' => 'Plot', 'is_headingid' => '2', 'is_propertykind' => '1'],
            ['name' => 'FarmHoue Plot',  'is_heading' => '0', 'headingname' => 'Plot', 'is_headingid' => '2', 'is_propertykind' => '1'],

            //Commerical
            ['name' => 'Office',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],
            ['name' => 'Shop',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],
            ['name' => 'WareHouse',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],
            ['name' => 'Buildings',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],
            ['name' => 'Hall',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],
            ['name' => 'Plaza',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],
            ['name' => 'Gym',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],
            ['name' => 'Theatre',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],
            ['name' => 'Land',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],
            ['name' => 'Food Court',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],
            ['name' => 'Factory',  'is_heading' => '0', 'headingname' => 'Commerical', 'is_headingid' => '3', 'is_propertykind' => '1'],

            // Feature
            // Primary Features
            ['name' => 'Built Year',  'is_heading' => '0', 'headingname' => 'Primary Features', 'is_headingid' => '4', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Central heating',  'is_heading' => '0', 'headingname' => 'Primary Features', 'is_headingid' => '4', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Central cooling',  'is_heading' => '0', 'headingname' => 'Primary Features', 'is_headingid' => '4', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Elevator/lift',  'is_heading' => '0', 'headingname' => 'Primary Features', 'is_headingid' => '4', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Public parking',  'is_heading' => '0', 'headingname' => 'Primary Features', 'is_headingid' => '4', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Underground parking',  'is_heading' => '0', 'headingname' => 'Primary Features', 'is_headingid' => '4', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'CCTV cameria',  'is_heading' => '0', 'headingname' => 'Primary Features', 'is_headingid' => '4', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],

            // Utilities
            ['name' => 'Sewarage',  'is_heading' => '0', 'headingname' => 'Utilities', 'is_headingid' => '5', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Electricity',  'is_heading' => '0', 'headingname' => 'Utilities', 'is_headingid' => '5', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Water supply',  'is_heading' => '0', 'headingname' => 'Utilities', 'is_headingid' => '5', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Gas',  'is_heading' => '0', 'headingname' => 'Utilities', 'is_headingid' => '5', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Security',  'is_heading' => '0', 'headingname' => 'Utilities', 'is_headingid' => '5', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],

            // Communication
            ['name' => 'internet Access',  'is_heading' => '0', 'headingname' => 'Communication', 'is_headingid' => '6', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Satelittle or cable TV',  'is_heading' => '0', 'headingname' => 'Communication', 'is_headingid' => '6', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],

            ['name' => 'School',  'is_heading' => '0', 'headingname' => 'Landmark Nearby', 'is_headingid' => '7', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Hospitals',  'is_heading' => '0', 'headingname' => 'Landmark Nearby', 'is_headingid' => '7', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Mosque',  'is_heading' => '0', 'headingname' => 'Landmark Nearby', 'is_headingid' => '7', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Restaurant',  'is_heading' => '0', 'headingname' => 'Landmark Nearby', 'is_headingid' => '7', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],

            // Secondary
            ['name' => 'Backup Generator',  'is_heading' => '0', 'headingname' => 'Secondary Features', 'is_headingid' => '8', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Maintanance',  'is_heading' => '0', 'headingname' => 'Secondary Features', 'is_headingid' => '8', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'Number of floors',  'is_heading' => '0', 'headingname' => 'Secondary Features', 'is_headingid' => '8', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],
            ['name' => 'facing',  'is_heading' => '0', 'headingname' => 'Secondary Features', 'is_headingid' => '8', 'is_propertykind' => '0', 'is_propertyfeature' => '1'],

        ];
        foreach ($propertyKind as $type) {
            propertieskind::create($type);
        }

        // Admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => '1',
            'address' => 'admin',
            'phone' => '1234566',
            'status' => '2',
        ]);
        // Agent
        User::factory()->create([
            'name' => 'Agent',
            'email' => 'agent@gmail.com',
            'password' => bcrypt('agent'),
            'role_id' => '2',
            'address' => 'admin',
            'phone' => '1234566',
            'status' => '2',
        ]);
        // dealer
        User::factory()->create([
            'name' => 'Dealer',
            'email' => 'dealer@gmail.com',
            'password' => bcrypt('dealer'),
            'role_id' => '3',
            'address' => 'dealer',
            'phone' => '1234566',
            'status' => '2',
        ]);
        // User
        User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'role_id' => '4',
            'address' => 'admin',
            'phone' => '1234566',
            'status' => '2',
        ]);
    }
}
