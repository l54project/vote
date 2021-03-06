<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;
        protected $table = 'poll';
    protected $fillable = [
    	'id_poll',
    	'kuis',
	];


    public function pilihan()
    {
        return $this->hasMany(Pilihan::class, 'id_poll', 'id_poll');
    }
}
