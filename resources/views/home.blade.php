@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class=" md:p-6 ">
        <div class="flex justify-between flex-col rounded-xl shadow bg-white mb-7 ">
            <div class="left">
                <h2 class="text-4xl font-semibold text-center p-5 mt-2">Welcome To {{ $homeData -> namaWebsite }} </h2>
                <p class="text-xl text-center px-5 md:px-10 pt-2">{{ $homeData -> tagline }}</p>
            </div>
            <div class="right flex  gap-2 md:gap-0 justify-center px-4 py-1  text-blue-500  rounded-3xl   w-max self-center my-10 ">
                <p class="text-base md:text-xl f font-medium uppercase">{{ $homeData -> namaKelompok }} </p>  
                <p class=" text-base md:text-xl font-medium text-black  md:text-right ml-1 "> • {{ $homeData -> semester }}</p>
            </div>
        </div>

       <div class="mt-2 flex flex-col md:flex-row gap-4">

    <div class="w-full md:w-[300px] relative">
        <div class="flex w-full h-[300px] overflow-x-auto snap-x snap-mandatory scroll-smooth hide-scrollbar rounded-xl">
            
            <div id="slide2" class="flex-none w-full h-full snap-start">
                <img class="w-full h-full object-cover" src="{{ asset('photo-profile/2.png') }}">
            </div>

            <div id="slide1" class="flex-none w-full h-full snap-start">
                <img class="w-full h-full object-cover" src="{{ asset('photo-profile/1.png') }}">
            </div>

            <div id="slide3" class="flex-none w-full h-full snap-start">
                <img class="w-full h-full object-cover" src="{{ asset('photo-profile/3.png') }}">
            </div>


            <div id="slide4" class="flex-none w-full h-full snap-start">
                <img class="w-full h-full object-cover" src="{{ asset('photo-profile/4.png') }}">
            </div>

            <div id="slide5" class="flex-none w-full h-full snap-start">
                <img class="w-full h-full object-cover" src="{{ asset('photo-profile/5.png') }}">
            </div>
        </div>

        <!-- DOT NAV -->
        <div class="flex justify-center gap-2 py-2 absolute bottom-2 left-1/2 -translate-x-1/2">
            <a href="#slide2" class="w-3 h-3 rounded-sm bg-gray-400"></a>
            <a href="#slide1" class="w-3 h-3 rounded-sm bg-gray-400"></a>
            <a href="#slide3" class="w-3 h-3 rounded-sm bg-gray-400"></a>
            <a href="#slide4" class="w-3 h-3 rounded-sm bg-gray-400"></a>
            <a href="#slide5" class="w-3 h-3 rounded-sm bg-gray-400"></a>
        </div>
    </div>

   
    <div class="flex-1">
        <div class="bg-white text-black p-6 rounded-xl shadow-lg h-full">
            <h1 class="text-xl font-bold mb-4">Our Team GitHub</h1>

            <div class="max-h-[198px] overflow-y-auto pr-2">
                <ul class="space-y-3 text-sm">

                    <li class="flex justify-between border-b pb-2">
                        <a href="#slide2"><span>Arganata</span></a>
                        <a href="https://github.com/arga-nata" target="_blank" class="text-blue-500 hover:underline">arga-nata</a>
                    </li>
                    <li class="flex justify-between border-b pb-2">
                        <a href="#slide1"><span>Eko Ramadani</span></a>
                        <a href="https://github.com/EkoRamadn" target="_blank" class="text-blue-500 hover:underline">EkoRamadn</a>
                    </li>

                    <li class="flex justify-between border-b pb-2">
                        <a href="#slide3"><span>Ahmad Yusron Fadil</span></a>
                        <a href="https://github.com/AhmadYusronF" target="_blank" class="text-blue-500 hover:underline">AhmadYusronF</a>
                    </li>


                    <li class="flex justify-between border-b pb-2">
                        <a href="#slide4"><span>Firlian Firmansyah</span></a>
                        <a href="https://github.com/FirmanSyah2078" target="_blank" class="text-blue-500 hover:underline">FirmanSyah2078</a>
                    </li>

                    <li class="flex justify-between">
                        <a href="#slide5"><span>Naufal Abad</span></a>
                        <a href="https://github.com/4estra" target="_blank" class="text-blue-500 hover:underline">4estra</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

 
    <div class="flex-1">
        <div class="bg-white text-black p-6 rounded-xl shadow-lg h-full">
            <h3 class="text-xl font-bold mb-4">Repository Project</h3>

            <div class="flex justify-between items-center border-b pb-2">
                <span>Capstone Project</span>
                <a href="https://github.com/EkoRamadn/PWL-Kelompok-2" target="_blank"
                   class="text-blue-500 hover:underline">
                     PWL-Kelompok-2
                </a>
            </div>
        </div>
    </div>

</div>


  

    </div>
@endsection