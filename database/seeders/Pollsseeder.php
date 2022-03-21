<?php

namespace Database\Seeders;

use App\Models\Pilihan;
use App\Models\Poll;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class Pollsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poll = [
                    [
                        'id_poll'   => 1,
                        'kuis'      => "HP di indonesia", 
                        'pilihan'       => [
                            'OPPO',
                            'VIVO',
                            'ASUS',
                            'SAMSUNG'
                        ]
                    ],
                    [
                        'id_poll'   => 2,
                        'kuis'      => "Senjata", 
                        'pilihan'       => [
                            'PEDANG',
                            'PISTOL',
                            'SAMURAI',
                            'CLURIT'
                        ]
                    ],
                    [
                        'id_poll'   => 3,
                        'kuis'      => "Game", 
                        'pilihan'       => [
                            'AOV',
                            'COD',
                            'ML',
                            'PUBG'
                        ]
                    ],
                    [
                        'id_poll'   => 4,
                        'kuis'      => "Warna", 
                        'pilihan'       => [
                            'MERAH',
                            'KUNING',
                            'HIJAU',
                            'HITAM'
                        ]
                    ],
                ];



            foreach($poll as $data) {
                Poll::insert([
                    'id_poll'   => $data['id_poll'],
                    'kuis'      => $data['kuis'],
                ]);

                foreach($data['pilihan'] as $pil){
                    Pilihan::insert([
                        'id_poll'   => $data['id_poll'],
                        'opsi'      => $pil
                    ]);
                }

            }

    }
}
