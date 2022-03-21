<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote_detail extends Model
{
    use HasFactory;
    protected $table = 'vote_detail';
    protected $fillable = [
    	'id_vote',
    	'id_poll',
    	'id_pilihan',
    ];
}
