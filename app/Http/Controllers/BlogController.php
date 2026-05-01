<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function Blog()
    {
        $articles = [

            [
                'image' => 'images/casemiro-leave.png',
                'title' => "Benjamin Sesko bemoans Manchester United’s impending loss of Casemiro",
                'writer' => 'Andy Hunter',
                'date' => '28 April 2026',
                'summary' => 'Benjamin Sesko described Casemiro as a “working machine” whose influence on and off the pitch has been vital. He emphasized that United will miss his experience, work rate, and leadership.'
            ],
            [
                'image' => 'images/KingMu21.png',
                'title' => "Manchester United 2-1 Brentford",
                'writer' => 'Daniel Harris',
                'date' => '27 April 2026',
                'summary' => 'United took the lead through Alejandro Garnacho, Brentford equalized via Ivan Toney, and Mason Mount scored the decisive winner late in the game.'
            ],
            [
                'image' => 'images/michael-carrick.png',
                'title' => "Manchester United yet to decide if Michael Carrick will be offered manager’s job",
                'writer' => 'Jamie Jackson',
                'date' => ' 22 April 2026',
                'summary' => 'Since replacing Ruben Amorim in January, Carrick has won 8 of 12 matches, collecting 26 points from a possible 36—the best return in the Premier League during that period. He has lifted United from 7th to 3rd place, putting them close to Champions League qualification.'
            ],
            [
                'image' => 'images/cunha-score.png',
                'title' => "Manchester United hold on after Cunha’s cool finish to hand Chelsea latest loss",
                'writer' => 'Jacob Steinberg',
                'date' => ' 18 April 2026',
                'summary' => ' Matheus Cunha scored with a composed finish to secure the win for United. Chelsea suffered yet another defeat, continuing their poor run of form.'
            ]
        ];

        return view('blog', compact('articles'));
    }
}
