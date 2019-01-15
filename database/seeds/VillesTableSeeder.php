<?php

use Illuminate\Database\Seeder;
use App\Models\Ville;

class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ville::create([
        	'id'=>'1',
        	'ville'=>'Cotonou',
        	'idPays'=>'1',
        ]);

        Ville::create([
        	'id'=>'2',
        	'ville'=>'Parakou',
        	'idPays'=>'1',
        ]);

        Ville::create([
        	'id'=>'3',
        	'ville'=>'Malanville',
        	'idPays'=>'1',
        ]);

        Ville::create([
        	'id'=>'4',
        	'ville'=>'Lomé',
        	'idPays'=>'2',
        ]);

        Ville::create([
        	'id'=>'5',
        	'ville'=>'Kara',
        	'idPays'=>'2',
        ]);
    }
}
