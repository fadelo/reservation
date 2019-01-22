<?php

use Illuminate\Database\Seeder;
use App\Models\LieuEmbarq;

class LieuEmbarqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LieuEmbarq::create([
        	'id'=>'1',
        	'idTrjt'=>'1',
        	'lieuEmbarq'=>'Base',
        ]);

        LieuEmbarq::create([
        	'id'=>'2',
        	'idTrjt'=>'1',
        	'lieuEmbarq'=>'Stade',
        ]);
    }
}
