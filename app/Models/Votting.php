<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votting extends Model
{
    use HasFactory;
        protected $table = 'votting';
    protected $fillable = [
    	'id_votting',
    	'id_login',
    	'id_poll',
    	'id_pilihan',
    ];
}
