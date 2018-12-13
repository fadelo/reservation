<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentPagesController extends Controller
{
    public function home(){
    	return view ('agent/home');
    }
}
