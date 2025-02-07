<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>

        .highlight {
            background-color: #f3f3f3;
        }

        .code-block {
            background-color: #f7fafc;
            border: 1px solid #cbd5e0;
            border-radius: 0.375rem;
            padding: 1rem;
            margin-top: 1.5rem;
            overflow-x: auto;
        }

        </style>

    </head>
<body class="bg-slate-800 text-white">


<!-- Start Navbar -->
        <nav class="bg-gray-900 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{route('index')}}">
                <div class="text-white text-2xl font-bold">Madin Bloch</div>
            </a>
                <!-- Hamburger menu for mobile -->
                <div class="block lg:hidden">
                    <button id="toggle-btn" class="text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
    
                <!-- Navbar links -->
                <div class="hidden lg:flex space-x-4 text-xl font-medium">
                    <a href="{{route('index')}}" class="text-white">Home</a>
                    <a href="#skills" class="text-white">Blogs</a>
                    <a href="{{route('hackthone')}}" class="text-white">Hackthone 2K23</a>
                </div>
            </div>
        </nav>
    
        <!-- Mobile menu -->
    
        <div id="mobile-menu" class="bg-gray-900 p-4 hidden text-xl">
            <div class="flex flex-col space-y-4 ml-3">
                <a href="{{route('index')}}" class="text-white">Home</a>
                <a href="#about" class="text-white">About</a>
                <a href="#Skills" class="text-white">Skills</a>
                <a href="{{route('hackthone')}}" class="text-white">Hackthone 2K23</a>
            </div>
        </div>
    
<!-- End Navbar -->