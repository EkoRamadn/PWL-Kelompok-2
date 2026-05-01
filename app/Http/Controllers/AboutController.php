<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $arrayName = [
            ['nama' => 'Eko Ramadhani', 'nim' => '24104410087', 'peran' => 'Lead Developer & Architect. Handle core setup Laravel 13, konfigurasi TailwindCSS & Vite, arsitektur Master Layout', 'foto' => '1.png'],
            ['nama' => 'Handika Rado Arganata', 'nim' => '24104410051', 'peran' => 'About Page Specialist. Build AboutController terpisah untuk manage logic halaman profil, slicing view About, dan manage struktur data anggota.', 'foto' => '2.png'],
            ['nama' => 'Ahmad Yusron Fadil', 'nim' => '24104410050', 'peran' => 'Blog Module Developer. Build BlogController terpisah untuk manage logic artikel, slicing view Blog, dan implementasi render data artikel secara dinamis.', 'foto' => '3.png'],
            ['nama' => 'Firlian Firman Syah', 'nim' => '24104410057', 'peran' => 'Contact Page Specialist. Build ContactController terpisah untuk manage logic halaman kontak, slicing interface Contact, dan handle flow data informasi kontak.', 'foto' => '4.png'],
            ['nama' => "Muhammad Naufal Abbad Mu' afa Rizqullah", 'nim' => '24104410049', 'peran' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et. ', 'foto' => '5.png']
        ];

        return view('about', compact('arrayName'));
    }
}
