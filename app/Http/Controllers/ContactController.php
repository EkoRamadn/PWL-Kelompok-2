<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'email' => 'hello@kelompok2.unisba.ac.id',
            'alamat' => 'Jl. Majapahit No. 4, Bumi Bung Karno, Blitar',
            'sosmed' => [
                ['platform' => 'Instagram', 'username' => '@kelompok2_pwl', 'link' => '#'],
                ['platform' => 'GitHub', 'username' => 'github.com/EkoRamadn', 'link' => 'https://github.com/EkoRamadn/PWL-Kelompok-2.git'],
                ['platform' => 'LinkedIn', 'username' => 'Kelompok 2 UNISBA', 'link' => '#']
            ]
        ];

        return view('contact', $data);
    }
}