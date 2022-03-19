<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pilihan;


class Pilihancontroller extends Controller
{
    public function index()
    {
    	$pilihans = pilihan::all();
    	return view('admin/pilihan/pilihan', compact('pilihans'));
    }
}