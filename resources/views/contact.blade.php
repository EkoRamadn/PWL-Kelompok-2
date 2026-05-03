@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">Contact Us</h2>
            <p class="text-lg text-gray-500 mt-4 max-w-2xl mx-auto">
                Have questions or want to collaborate on an IT project? Don't hesitate to send our team a message.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div
                class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-4">Informasi Kontak</h3>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-red-50 text-red-600 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Contact Information</p>
                            <p class="text-gray-600 mt-1 leading-relaxed">{{ $alamat }}</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-red-50 text-red-600 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Official Email</p>
                            <p class="text-gray-600 mt-1"><a href="mailto:{{ $email }}"
                                    class="hover:text-red-600">{{ $email }}</a></p>
                        </div>
                    </div>
                </div>

                <!-- Tampilkan Data Sosmed dengan Looping Foreach -->
                <div class="mt-10 pt-6 border-t border-gray-100">
                    <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-4">Find Us on Social Media
                    </h3>
                    <ul class="space-y-3">
                        @foreach ($sosmed as $item)
                            <li>
                                <a href="{{ $item['link'] }}"
                                    class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                                    <span
                                        class="font-semibold text-gray-700 group-hover:text-red-600 w-24">{{ $item['platform'] }}</span>
                                    <span class="text-gray-500">{{ $item['username'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                <h3 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-4">Send message</h3>

                <form action="#" class="space-y-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Full name</label>
                        <input type="text" placeholder="Enter name..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors outline-none bg-gray-50 focus:bg-white">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email address</label>
                        <input type="email" placeholder="nama@email.com"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors outline-none bg-gray-50 focus:bg-white">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea rows="4" placeholder="Write your message here..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors outline-none bg-gray-50 focus:bg-white resize-none"></textarea>
                    </div>

                    <button type="button"
                        class="w-full mt-4 bg-red-600 text-white font-bold py-3 px-4 rounded-xl hover:bg-red-700 focus:ring-4 focus:ring-red-200 transition-all duration-300 shadow-md hover:shadow-lg flex justify-center items-center">
                        <span>Send message</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                    <p class="text-xs text-center text-gray-400 mt-3">*This form is just a visual display (dummy) for
                        assignment purposes.</p>
                </form>
            </div>

        </div>
    </div>
@endsection
