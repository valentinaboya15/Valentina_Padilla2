<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros=[
            [
                'ISBN'=>'89707',
                'titulo'=> 'La chica de nieve',
                'precio'=>'50999',
                'editorial'=> 1,
            ],
            [
                'ISBN'=>'89789',
                'titulo'=> 'Un cuento perfecto',
                'precio'=>'90000',
                'editorial'=> 2,

            ],
            [
                'ISBN'=>'89778',
                'titulo'=> 'La madre de Frankenstein',
                'precio'=>'75000',
                'editorial'=> 3,
               
            ],
            [
                'ISBN'=>'89702',
                'titulo'=> 'Sapiens de animales a dioses',
                'precio'=>'85999',
                'editorial'=> 4,
                
            ],
            [
                'ISBN'=>'89709',
                'titulo'=> 'A corazón abierto',
                'precio'=>'65999',
                'editorial'=> 5,
               
            ],
            ];
            DB::table('libro')->insert($libros);
    }
}
