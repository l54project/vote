<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\Vote;
use App\Models\Vote_detail;
use Illuminate\Http\Request;
use App\Models\Votting;

class Vottingcontroller extends Controller
{
	
	public function index()
	{
		$vottings = votting::all();
		return view('admin.votting1.index', compact('vottings'));
	}





	// Controller user

	public function user_votting()
	{

		$polls = Poll::with('pilihan')->get();

		return view('user.votting.index', compact('polls'));
	}

	public function user_votting_proses(Request $request)
	{

		$id_max = Vote::max('id_vote') + 1;


		Vote::insert(['id_vote' => $id_max, 'id_login'	=> 2 ]);
		foreach($request->all()  as $key =>  $req){
			if($key != '_token'){
				Vote_detail::insert([
					'id_vote'		=> $id_max,
					'id_poll'		=> $key,
					'id_pilihan'	=> $req
				]);
			}
		}

		return redirect('sukses');
	}

	public function sukses_vote()
	{
		return view('user.votting.done');
	}

}
