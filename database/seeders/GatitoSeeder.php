<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gatito;
class GatitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Gatito::create([
            'nombre'=>'Felix'
        ]);
        Gatito::create([
            'nombre'=>'Jose'
        ]);
        Gatito::create([
            'nombre'=>'Carola'
        ]);
        Gatito::create([
            'nombre'=>'juan'
        ]);
        Gatito::create([
            'nombre'=>'sirilo'
        ]);
        Gatito::factory(15)->create();    
    }
}
