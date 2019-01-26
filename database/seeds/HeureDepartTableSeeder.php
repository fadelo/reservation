<?php

use Illuminate\Database\Seeder;
use App\Models\HeureDepart;

class HeureDepartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        HeureDepart::create([
        	'id'=>'1',
        	'idTrjt'=>'1',
        	'heureDpt'=>'13h',
        	'heureEnreg'=>'12h',
        ]);

        HeureDepart::create([
        	'id'=>'2',
        	'idTrjt'=>'1',
        	'heureDpt'=>'19h',
        	'heureEnreg'=>'18h',
        ]);

        HeureDepart::create([
            'id'=>'3',
            'idTrjt'=>'3',
            'heureDpt'=>'15h',
            'heureEnreg'=>'14h',
        ]);

        HeureDepart::create([
            'id'=>'4',
            'idTrjt'=>'4',
            'heureDpt'=>'15h',
            'heureEnreg'=>'14h',
        ]); 
    }
}
