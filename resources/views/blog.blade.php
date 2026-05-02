@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    {{-- <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-2xl font-semibold mb-2">Blog </h2>
        <p class="text-gray-600">Ini halaman Blog</p>
    </div> --}}

    <div class=" border-y border-gray-300 mt-10">
        <div
            class="p-6 mx-auto outline-1 max-w-7xl outline-gray-300  flex flex-col md:flex-row divide-y overflow-x-scroll divide-gray-300 md:divide-y-0 md:divide-x">
            @foreach ($articles as $item)
                <div class="flex  p-6 flex-col flex-none md:max-w-96">
                    <img class="" src="{{ asset($item['image']) }}">
                    <div>
                        <div class="flex justify-between mt-3 ">
                            <h2 class="text-gray-400">{{ $item['writer'] }}</h2>
                            <p class="text-gray-400">{{ $item['date'] }}</p>
                        </div>
                        <h1 class="font-bold text-xl mb-2">{{ $item['title'] }}</h1>

                        <p class="text-gray-600 text-justify">{{ $item['summary'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    @endsection
