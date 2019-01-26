<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
        	'id'=>'1',
        	'role'=>'Admin',
        	]);

        Role::create([
        	'id'=>'2',
        	'role'=>'Agent',
        	]);

        Role::create([
        	'id'=>'3',
        	'role'=>'Client',
        	]);
    }
}
