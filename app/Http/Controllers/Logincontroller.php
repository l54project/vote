<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class Logincontroller extends Controller
{
    public function index()
    {
    	$logins = Login::all();
    	return view('admin/login/index', compact('logins'));
    }
}