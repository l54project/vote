<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class Logincontroller extends Controller
{
    public function index()
    {
    	$logins = login::all();
    	return view('admin/login/index', compact('logins'));
    }
}