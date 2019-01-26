<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(CompagniesTableSeeder::class);
    	$this->call(PaysTableSeeder::class);
    	$this->call(VillesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TrajetsTableSeeder::class);
        $this->call(HeureDepartTableSeeder::class);
        $this->call(LieuEmbarqTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
    }
}
