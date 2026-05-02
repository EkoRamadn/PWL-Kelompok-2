<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $arrayName = [
            ['name' => 'Eko Ramadhani', 'nim' => '24104410087', 'role' => 'Lead Developer & Architect. Handled core Laravel 13 setup, TailwindCSS & Vite configuration, and Master Layout architecture.', 'photo' => '1.png'],
            ['name' => 'Handika Rado Arganata', 'nim' => '24104410051', 'role' => 'About Page Specialist. Built a separate AboutController to manage profile page logic, sliced the About view, and managed member data structure.', 'photo' => '2.png'],
            ['name' => 'Ahmad Yusron Fadil', 'nim' => '24104410050', 'role' => 'Blog Module Developer. Built a separate BlogController to manage article logic, sliced the Blog view, and implemented dynamic article data rendering.', 'photo' => '3.png'],
            ['name' => 'Firlian Firman Syah', 'nim' => '24104410057', 'role' => 'Contact Page Specialist. Built a separate ContactController to manage contact page logic, sliced the Contact interface, and handled contact information data flow.', 'photo' => '4.png'],
            ['name' => "Muhammad Naufal Abbad Mu' afa Rizqullah", 'nim' => '24104410049', 'role' => 'Home Page Specialist. Built a separate HomeController to manage landing page logic, sliced the home view, and implemented the front-page UI/UX design.', 'photo' => '5.png']
        ];

        return view('about', compact('arrayName'));
    }
}
