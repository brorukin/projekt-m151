<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ort;

class OrtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ort::create([
            'plz' => '6004',
            'ort' => 'Luzern'
        ]);
        
        Ort::create([
            'plz' => '6414',
            'ort' => 'Oberarth'
        ]);

    }
}
