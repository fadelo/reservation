<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function home(){
    	return view('admin/home');
    }

    public function message(){
    	return view('admin/messages');
    }

    public function notification(){
    	return view('admin/notifications');
    }

    public function comment(){
    	return view('admin/comments');
    }


}
