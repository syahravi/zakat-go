@extends('layouts.base')

@section('body')
    <nav class="justify-between shadow-md fixed w-full z-10 bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#landing" class="flex items-center">
                <img src="{{ asset('img/logozakat.webp') }}" class="h-10 mr-3" alt="Flowbite Logo" />
            </a>
            <button id="mobileMenuToggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-dropdown" aria-expanded="false">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                    <li class="mt-1">
                        <a href="#landing" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Home</a>
                    </li>
                    <li class="mt-1">
                        <a href="#program" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Program</a>
                    </li>
                    <li class="text-center md:flex md:items-center md:justify-center">
                        @auth
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="flex items-center bg-slate-700 hover:bg-slate-600 text-white font-bold py-2 px-4 rounded focus:outline-none" type="submit">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="flex items-center bg-slate-700 hover:bg-slate-600 text-white font-bold py-2 px-4 rounded focus:outline-none">
                            <img src="{{ asset('img/client.webp') }}" alt="akun" class="w-6 h-6 mr-2">
                            Masuk ke Akun</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
