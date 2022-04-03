<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

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
        Product::create([
            'name' => 'Hacke',
            'price' => 21.00,
            'details' => 'Gartenwerkzeug',
            'manual' => 'Gartenwerkzeug',
            'image' => 'images/hacke.jpeg'
        ]);
        Product::create([
            'name' => 'Schaufel',
            'price' => 30.65,
            'details' => 'Gartenwerkzeug',
            'manual' => 'Zum Hacken geeignet',
            'image' => 'images/schaufel.jpeg'
        ]);
        Product::create([
            'name' => 'Pickel',
            'price' => 25.05,
            'details' => 'Gartenwerkzeug',
            'manual' => 'Zum Hacken geeignet',
            'image' => 'images/pickel.jpg'
        ]);
    }
}
