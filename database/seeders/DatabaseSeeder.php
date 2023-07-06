<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        // Admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => '1',
            'address' => 'admin',
            'phone' => '1234566',
        ]);
        // Agent
        User::factory()->create([
            'name' => 'Agent',
            'email' => 'agent@gmail.com',
            'password' => bcrypt('agent'),
            'role_id' => '2',
            'address' => 'admin',
            'phone' => '1234566',
        ]);
        // dealer
        User::factory()->create([
            'name' => 'Dealer',
            'email' => 'dealer@gmail.com',
            'password' => bcrypt('dealer'),
            'role_id' => '3',
            'address' => 'dealer',
            'phone' => '1234566',
        ]);
        // User
        User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'role_id' => '4',
            'address' => 'admin',
            'phone' => '1234566',
        ]);
    }
}
