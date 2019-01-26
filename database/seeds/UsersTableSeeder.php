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
          'role_id'=>'1',
          'email'=>'fad@fad.com',
          'password'=>bcrypt('123456789'),

      	]);

        User::create([
          'id'=>'2',
          'nom'=>'KOKOU',
          'prenom'=>'Jean',
          'telephone'=>'+2299752152',
          'idVille'=>'1',
          'idComp'=>'1',
          'role_id'=>'2',
          'email'=>'jean@att.com',
          'password'=>bcrypt('123456789'),

        ]);

        User::create([
          'id'=>'3',
          'nom'=>'TOTO',
          'prenom'=>'Tata',
          'telephone'=>'+2299752152',
          'idVille'=>'1',
          'idComp'=>null,
          'role_id'=>'3',
          'email'=>'toto@fadlab.com',
          'password'=>bcrypt('123456789'),

        ]);
    }
}
