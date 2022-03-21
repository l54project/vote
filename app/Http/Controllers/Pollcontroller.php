<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;

class Pollcontroller extends Controller
{
    public function index()
    {
    	$polls = poll::all();
    	return view('admin/poll/index', compact('polls'));
    }
}