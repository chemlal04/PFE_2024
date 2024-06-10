<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chambres;

class ChambresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Populate chambres table with sample data
        Chambres::create([
            'id_user'=>1,
            'id_name'=> 'hotel farah chambres',
            'Vile_hotel' => 'Sample Hotel 1',
            'n_place' => 5,
            'numero' => 101,
            'N_etape' => 1,
            'prix' => 100.00,
            'image1' => 'sample_image1.jpg',
            'image2' => 'sample_image2.jpg',
            'image3' => 'sample_image3.jpg',
            'image4' => 'sample_image4.jpg',
        ]);

        Chambres::create([
            'id_user'=>2,
            'id_name'=> 'hotel massa chambres',
            'Vile_hotel' => 'Sample Hotel 2',
            'n_place' => 3,
            'numero' => 201,
            'N_etape' => 2,
            'prix' => 150.00,
            'image1' => 'sample_image1.jpg',
            'image2' => 'sample_image2.jpg',
            'image3' => 'sample_image3.jpg',
            'image4' => 'sample_image4.jpg',
        ]);

        // Add more sample data as needed
    }
}
