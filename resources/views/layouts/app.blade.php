<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="{{asset('assets/logo/favicon.png')}}">

    <title>{{ $page_title ?? 'Blogs Management System' }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

<nav class="bg-white w-full z-20 top-0 border-b border-gray-200">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-2">
        <!-- Logo -->
        <a href="{{ $homeUrl }}" class="md:basis-auto xs:basis-[20%]">
            <img src="{{ asset('assets/logo/favicon.png') }}" width="70px" height="70px" class="mr-3" alt="Logo">
        </a>

        <!-- Navigation Links -->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-4 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{ $homeUrl }}" class="font-bold text-gray-700 block my-2" aria-current="page"> Home</a>
                </li>
                <li>
                    <a href="{{ route('blogs.index') }}" class="font-bold text-gray-700 block my-2" aria-current="page">Blogs</a>
                </li>
            </ul>
        </div>

        <div class="flex items-center md:order-3 space-x-8">


            @auth

                <div class="px-4 py-2 bg-gray-400 rounded-lg flex">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <p class="font-semibold text-white mt-2">{{ Auth::user()->name }}</p>
                </div>
            @else
                <!-- Login Button for Guests -->
                <a href="{{ route('login') }}" class="text-white bg-yellow-500 hover:bg-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-300">
                    Login
                </a>
            @endauth

            @auth
                <form action="{{ route('logout') }}" method="POST" class="border-t border-gray-100">
                    @csrf
                    <button type="submit" class="font-extrabold w-full px-4 py-3 text-left rounded-lg bg-yellow-500 text-warning-50 hover:bg-yellow-400 hover:text-warning-50">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
</nav>

@yield('content')

<footer class="bg-gray-800 md:pt-4 md:px-10 mt-4 mx-1.5 rounded-t-[8px]">
    <div class="text-center p-[12px] text-white text-[14px]">
        <span>{{now()->year }} Blogs Management System - All Rights Reserved.</span>
    </div>
</footer>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
