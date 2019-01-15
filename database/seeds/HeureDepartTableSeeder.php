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
        	'heureDpt'=>'13',
        	'heureEnreg'=>'12',
        ]);

        HeureDepart::create([
        	'id'=>'2',
        	'idTrjt'=>'1',
        	'heureDpt'=>'19',
        	'heureEnreg'=>'18',
        ]); 
    }
}
