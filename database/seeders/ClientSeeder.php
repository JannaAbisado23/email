<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Abisado',
                'first_name' => 'Janna',
                'middle_name' => 'Lao',
                'address' => 'Cogon1, Inabangga, Bohol',
                'birth_date' => '2002-01-28',
                'phone_number' => '091921231',
                'email' => 'jannaabisado58@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Villarmia',
                'first_name' => 'AceJoy',
                'middle_name' => 'Jabal',
                'address' => 'Tubigon, Bohol',
                'birth_date' => '2000-04-11',
                'phone_number' => '09096042852',
                'email' => 'acejoygwapo123@gmail.com',
                'initial_deposit' => 10000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
