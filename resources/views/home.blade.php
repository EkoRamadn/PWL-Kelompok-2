@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class=" p-6 ">
        <div class="flex justify-between  mb-2 flex-col rounded-xl shadow bg-white mb-7 pt-6">
            <div class="left">
                <h2 class="text-4xl font-semibold text-center mt-2">Welcome To {{ $homeData -> namaWebsite }} </h2>
                <p class="text-xl text-center px-10 pt-2">{{ $homeData -> tagline }}</p>
            </div>
            <div class="right flex  gap-2 md:gap-0 justify-center px-4 py-1  text-blue-500  rounded-3xl   w-max self-center my-10 ">
                <p class="text-base md:text-xl f font-medium uppercase">{{ $homeData -> namaKelompok }} </p>  
                <p class=" text-base md:text-xl font-medium text-black  md:text-right ml-1 "> • {{ $homeData -> semester }}</p>
            </div>
        </div>
        {{-- <div class="h-64 bg-cover bg-center rounded-xl p-4 text-white grayscale-50 mb-2"
            style="background-image: url('{{ asset('images/hero.jpg') }}')">
        </div> --}}
        {{-- <hr> --}}
        <div class="mt-2 flex flex-col md:flex-row ">
            <div class="left w-full md:w-[27%] relative">
                <div class="flex w-full h-[500px] md:h-[300px] overflow-x-auto snap-x snap-mandatory scroll-smooth hide-scrollbar overflow-hidden rounded-xl">
           
                    <div id="slide1" class="flex-none w-full h-full snap-start bg-blue-500 overflow-hidden rounded-md">
                        <img 
                            class="w-full h-full object-cover" 
                            src="{{ asset('images/hero.jpg') }}" 
                            alt=""
                        >
                    </div>
         
                    <div id="slide2" class="flex-none w-full h-full snap-start bg-blue-500 overflow-hidden rounded-md">
                        <img 
                            class="w-full h-full object-cover" 
                            src="{{ asset('images/hero.jpg') }}" 
                            alt=""
                        >
                    </div>

                    <div id="slide3" class="flex-none w-full h-full snap-start bg-blue-500 overflow-hidden rounded-md">
                        <img 
                            class="w-full h-full object-cover" 
                            src="{{ asset('images/hero.jpg') }}" 
                            alt=""
                        >
                    </div>

                    <div id="slide4" class="flex-none w-full h-full snap-start bg-blue-500 overflow-hidden rounded-md">
                        <img 
                            class="w-full h-full object-cover" 
                            src="{{ asset('images/hero.jpg') }}" 
                            alt=""
                        >
                    </div>

                    <div id="slide5" class="flex-none w-full h-full snap-start bg-blue-500 overflow-hidden rounded-md">
                        <img 
                            class="w-full h-full object-cover" 
                            src="{{ asset('images/hero.jpg') }}" 
                            alt=""
                        >
                    </div>
                </div>


                <div class="flex justify-center gap-2 py-2 absolute bottom-2 left-1/2 -translate-x-1/2">
                    <a href="#slide1" class="w-3 h-3 rounded-sm bg-gray-400 focus:bg-black"></a>
                    <a href="#slide2" class="w-3 h-3 rounded-sm bg-gray-400 focus:bg-black"></a>
                    <a href="#slide3" class="w-3 h-3 rounded-sm bg-gray-400 focus:bg-black"></a>
                    <a href="#slide4" class="w-3 h-3 rounded-sm bg-gray-400 focus:bg-black"></a>
                    <a href="#slide5" class="w-3 h-3 rounded-sm bg-gray-400 focus:bg-black"></a>
                </div>

            </div>
            <div class="right w-full md:pl-3 mt-3 md:mt-0">
                <ul class="grid grid-cols-2 w-full h-full gap-3 *:rounded-xl *:overflow-hidden *:h-[200px] md:*:h-full *:w-full">
                    <li class=" bg-amber-300">
                        <a href="" class=" w-full h-full flex items-center justify-center">
                            <button class="relative group cursor-pointer text-sky-50  overflow-hidden h-full w-full rounded-md bg-sky-800 p-2 flex justify-center items-center font-extrabold">

                            <div class="absolute top-3 right-20 group-hover:top-12 group-hover:-right-12 z-10 w-40 h-40 rounded-full group-hover:scale-150 group-hover:opacity-50 duration-500 bg-sky-900"></div>
                            <div class="absolute top-3 right-20 group-hover:top-12 group-hover:-right-12 z-10 w-32 h-32 rounded-full group-hover:scale-150 group-hover:opacity-50 duration-500 bg-sky-800"></div>
                            <div class="absolute top-3 right-20 group-hover:top-12 group-hover:-right-12 z-10 w-24 h-24 rounded-full group-hover:scale-150 group-hover:opacity-50 duration-500 bg-sky-700"></div>
                            <div class="absolute top-3 right-20 group-hover:top-12 group-hover:-right-12 z-10 w-14 h-14 rounded-full group-hover:scale-150 group-hover:opacity-50 duration-500 bg-sky-600"></div>
                            <p class="z-10">See more</p>
                            </button>
                        </a>
                    </li>
                    <li class=" bg-amber-300">
                        <a href="" class=" w-full h-full flex items-center justify-center">
                            <button class="border hover:scale-100 duration-300 relative group cursor-pointer text-sky-50  overflow-hidden h-full w-full rounded-md bg-sky-200 p-2 flex justify-center items-center font-extrabold">

                            <div class="absolute right-32 -top-4  group-hover:top-1 group-hover:right-2 z-10 w-40 h-40 rounded-full group-hover:scale-150 duration-500 bg-sky-900"></div>
                            <div class="absolute right-2 -top-4  group-hover:top-1 group-hover:right-2 z-10 w-32 h-32 rounded-full group-hover:scale-150  duration-500 bg-sky-800"></div>
                            <div class="absolute -right-12 top-4 group-hover:top-1 group-hover:right-2 z-10 w-24 h-24 rounded-full group-hover:scale-150  duration-500 bg-sky-700"></div>
                            <div class="absolute right-20 -top-4 group-hover:top-1 group-hover:right-2 z-10 w-16 h-16 rounded-full group-hover:scale-150  duration-500 bg-sky-600"></div>
                            <p class="z-10">See more</p>
                            </button>
                        </a>
                    </li>
                    <li class=" bg-amber-300">
                        <a href="" class=" w-full h-full flex items-center justify-center">
                          <!-- From Uiverse.io by Javierrocadev --> 
                            <button class="border hover:scale-100 duration-300 relative group cursor-pointer text-sky-50  overflow-hidden h-full w-full rounded-md bg-sky-200 p-2 flex justify-center items-center font-extrabold">

                            <div class="absolute right-32 -top-4  group-hover:top-1 group-hover:right-2 z-10 w-40 h-40 rounded-full group-hover:scale-150 duration-500 bg-sky-900"></div>
                            <div class="absolute right-2 -top-4  group-hover:top-1 group-hover:right-2 z-10 w-32 h-32 rounded-full group-hover:scale-150  duration-500 bg-sky-800"></div>
                            <div class="absolute -right-12 top-4 group-hover:top-1 group-hover:right-2 z-10 w-24 h-24 rounded-full group-hover:scale-150  duration-500 bg-sky-700"></div>
                            <div class="absolute right-20 -top-4 group-hover:top-1 group-hover:right-2 z-10 w-16 h-16 rounded-full group-hover:scale-150  duration-500 bg-sky-600"></div>
                            <p class="z-10">See more</p>
                            </button>
                        </a>
                    </li>
                    <li class=" bg-amber-300">
                        <a href="" class=" w-full h-full flex items-center justify-center">
                            <!-- From Uiverse.io by Javierrocadev --> 


                            <button class="relative border hover:border-sky-600 duration-500 group cursor-pointer text-sky-50  overflow-hidden h-full w-full rounded-md bg-sky-800 p-2 flex justify-center items-center font-extrabold">
                            <div class="absolute z-10 w-48 h-48 rounded-full group-hover:scale-150 transition-all  duration-500 ease-in-out bg-sky-900 delay-150 group-hover:delay-75"></div>
                            <div class="absolute z-10 w-40 h-40 rounded-full group-hover:scale-150 transition-all  duration-500 ease-in-out bg-sky-800 delay-150 group-hover:delay-100"></div>
                            <div class="absolute z-10 w-32 h-32 rounded-full group-hover:scale-150 transition-all  duration-500 ease-in-out bg-sky-700 delay-150 group-hover:delay-150"></div>
                            <div class="absolute z-10 w-24 h-24 rounded-full group-hover:scale-150 transition-all  duration-500 ease-in-out bg-sky-600 delay-150 group-hover:delay-200"></div>
                            <div class="absolute z-10 w-16 h-16 rounded-full group-hover:scale-150 transition-all  duration-500 ease-in-out bg-sky-500 delay-150 group-hover:delay-300"></div>
                            <p class="z-10">Discover More</p>
                            </button>

                        </a>
                    </li>
                </ul>
            </div>
        </div>


        {{-- <p>Kami Team pembahas apa saja yang igin kita bahas.</p> --}}

    </div>
@endsection