<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'id'=>'1',
          'nom'=>'SEIDOU',
          'prenom'=>'Fadel',
          'telephone'=>'+22997996112',
          'idVille'=>'1',
          'idComp'=>'1',
          'email'=>'fad@fad.com',
          'password'=>'123456789',

      	]);
    }
}
