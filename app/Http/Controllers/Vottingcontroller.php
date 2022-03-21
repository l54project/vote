<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Votting;

class Vottingcontroller extends Controller
{
	
	public function index()
	{
		$vottings = votting::all();
		return view('admin/votting1/index', compact('vottings'));
	}
}
