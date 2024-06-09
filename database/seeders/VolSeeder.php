<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class VolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vols')->insert([
            [
                'id_user'=>1,
                'id_name'=> 'Mouad Flights',
                'Nom_vol' => 'Vol Paris - New York',
                'Ville_depart' => 'Paris',
                'Vile_arrivee' => 'New York',
                'date_depart' => '2024-07-01',
                'date_arrivee' => '2024-07-02',
                'H_depart' => '08:00:00',
                'H_arrivage' => '11:00:00',
                'type' => 'International',
                'N_place' => 150,
                'image1' => 'image1.jpg',
                'image2' => 'image2.jpg',
                'image3' => 'image3.jpg',
                'image4' => 'image4.jpg',
                'image5' => 'image5.jpg',
                'prix' => 899.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'id_user'=>2,
                'id_name'=> 'Mouad Flights',
                'Nom_vol' => 'Vol Tanger - Agadir',
                'Ville_depart' => 'Tanger',
                'Vile_arrivee' => 'Agadir',
                'date_depart' => '2024-06-17',
                'date_arrivee' => '2024-06-17',
                'H_depart' => '08:00:00',
                'H_arrivage' => '11:00:00',
                'type' => 'national',
                'N_place' => 160,
                'image1' => 'image1.jpg',
                'image2' => 'image2.jpg',
                'image3' => 'image3.jpg',
                'image4' => 'image4.jpg',
                'image5' => 'image5.jpg',
                'prix' => 300.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
