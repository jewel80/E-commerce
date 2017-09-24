<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{	
	public function manageUser(){
		$users= User::paginate(10);
		return view('admin.user.manageUser',['users'=>$users]);
	}
    
}
