<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen bg-gray-100">
        
        {{-- NAVBAR KHUSUS ADMIN --}}
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        {{-- Logo / Brand --}}
                        <div class="shrink-0 flex items-center font-bold text-xl text-indigo-700">
                            ADMIN AREA
                        </div>

                        {{-- Menu Navigasi --}}
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            
                            {{-- Menu Dashboard --}}
                            <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('dashboard') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                                Dashboard
                            </a>

                            {{-- Menu Berita --}}
                            {{-- Perhatikan request()->routeIs('admin.berita.*') agar menu aktif saat di halaman create/edit berita juga --}}
                            <a href="{{ route('admin.berita.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('admin.berita.*') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                                Kelola Berita
                            </a>

                            {{-- Menu Program --}}
                            <a href="{{ route('admin.program.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('admin.program.*') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                                Kelola Program
                            </a>
                        </div>
                    </div>

                    {{-- Dropdown / User Info --}}
                    <div class="flex items-center sm:ml-6">
                        <div class="flex items-center gap-4">
                            <span class="text-sm text-gray-600">Halo, {{ Auth::user()->name }}</span>
                            
                            {{-- Tombol Logout --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-sm text-red-600 hover:text-red-900 font-semibold">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        {{-- PAGE HEADER (Opsional, untuk Judul Halaman) --}}
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        {{-- PAGE CONTENT (Isi Utama) --}}
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>