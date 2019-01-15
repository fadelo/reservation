<?php

use Illuminate\Database\Seeder;
use App\Models\Pays;

class PaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pays::create([
        	'id'=>'1',
        	'code'=>'229',
        	'pays'=>'Benin',
        ]);

        Pays::create([
        	'id'=>'2',
        	'code'=>'228',
        	'pays'=>'Togo',
        ]);
    }
}
