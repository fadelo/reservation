<?php

use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::create([
        	'id'=>'1',
        	'numero'=>'12a5de7',
        	'dateReserv'=>'20190111',
        	'dateDpt'=>'20190112',
        	'nomReserv'=>'SEIDOU Fadel',
        	'nbrPlace'=>'1',
        	'payer'=>'1',
        	'idTrjt'=>'1',
        	'idHeureDpt'=>'1',
        	'idLieuEmbarq'=>'1',
        	'idUser'=>'1',
        ]);
    }
}
