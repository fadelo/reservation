<?php

use Illuminate\Database\Seeder;
use App\Models\Trajet;

class TrajetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
       Trajet::create([
       		'id'=>'1',
       		'idVillDpt'=>'1',
       		'idVilleArr'=>'2',
       		'idComp'=>'1',
       		'tarif'=>'7000',
       ]);

       Trajet::create([
       		'id'=>'2',
       		'idVillDpt'=>'1',
       		'idVilleArr'=>'3',
       		'idComp'=>'1',
       		'tarif'=>'12000',
       ]);

       Trajet::create([
       		'id'=>'3',
       		'idVillDpt'=>'1',
       		'idVilleArr'=>'2',
       		'idComp'=>'2',
       		'tarif'=>'5000',
       ]); 
    }
}
