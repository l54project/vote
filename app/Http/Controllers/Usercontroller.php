<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class Usercontroller extends Controller
{
    public function index()
    {
    	$users = Login::all();
    	return view('admin/user/index', compact('users'));
    }
}
