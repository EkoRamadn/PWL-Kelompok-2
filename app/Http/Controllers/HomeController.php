<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homeData = (object) [
            'namaWebsite' => 'Capstone Team 2',
            'tagline' => 'Where code meets creativity, that’s where simple ideas transform into something alive and meaningful. We believe every line of code is not just an instruction, but a form of expressiona blend of logic and imagination that creates new experiences. As fans of Manchester United, our spirit is inspired by their determination and iconic style of play: bold, consistent, and always striving for the best results. Just like on the pitch, we build with passion, teamwork, and a vision to keep growing and pushing forward.',
            'namaKelompok' => 'Kelompok 2',
            'semester'=> '4B'
        ];

        return view('home', compact('homeData'));
    }
}
