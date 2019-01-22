<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Compagnie;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create(){

    	$users = User::orderBy('email')->get();
    	$roles = Role::orderBy('role')->get();
    	$compagnies = Compagnie::orderBy('nom')->get();

    	return view ('admin/users/role', compact('users', 'roles', 'compagnies'));
    }
}
