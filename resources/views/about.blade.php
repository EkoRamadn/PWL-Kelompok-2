@extends('layouts.app')

@section('title', 'About')

@section('content')
    {{-- <h2 class="text-2xl font-semibold mb-2">About </h2>
    <p class="text-gray-600">Ini halaman About.</p> --}}

    <div class="flex flex-col gap-3 mx-auto max-w-3xl">
        @foreach ($arrayName as $test)
            <div class="bg-white p-5 rounded-2xl flex items-center gap-5 shadow">
                <img src="{{ asset('/photo-profile/' . $test['photo']) }}" alt="" class="w-24 h-24 rounded-full">
                <div class="flex flex-col">
                    <p class="text-lg font-bold">{{ $test['name'] }}</p>
                    <p class="text-sm">({{ $test['nim'] }})</p>
                    <p class="text-sm italic">{{ $test['role'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection
