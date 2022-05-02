<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'Name' => 'Ring 08',
                'Category' => 'Ring',
                'Description' => 'Rosewood Turquoise Wooden Ring Bentwood',
                'Price' => '1500',
                'gallary' => 'img/ring 8.jpg',
            ],

            [
                'Name' => 'Pendent 08',
                'Category' => 'Pendent',
                'Description' => 'Rosewood Turquoise Wooden Ring Bentwood',
                'Price' => '1700',
                'gallary' => 'img/pendent 8.jpg',
            ],
            [
                'Name' => 'Keytag 08',
                'Category' => 'Keytag',
                'Description' => 'Rosewood Turquoise Wooden Ring Bentwood',
                'Price' => '2000',
                'gallary' => 'img/keytag 8.jpg',
            ],
            [
                'Name' => 'Braslet 08',
                'Category' => 'Braslet',
                'Description' => 'Rosewood Turquoise Wooden Ring Bentwood',
                'Price' => '1150',
                'gallary' => 'img/braslet 8.jpg',
            ],
            
        ]);
    }
}
