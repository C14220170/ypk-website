<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Statistik --}}
            {{-- UPDATE: Grid diubah jadi 3 kolom (md:grid-cols-3) --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                
                {{-- 1. Kartu Berita --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 flex justify-between items-center">
                    <div>
                        <div class="text-gray-500 text-sm font-medium uppercase">Total Berita</div>
                        <div class="text-3xl font-bold text-gray-800">{{ $totalBerita ?? 0 }}</div>
                    </div>
                    <div class="p-3 bg-blue-100 rounded-full text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                </div>

                {{-- 2. Kartu Program --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 flex justify-between items-center">
                    <div>
                        <div class="text-gray-500 text-sm font-medium uppercase">Total Program</div>
                        <div class="text-3xl font-bold text-gray-800">{{ $totalProgram ?? 0 }}</div>
                    </div>
                    <div class="p-3 bg-green-100 rounded-full text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>

                {{-- 3. Kartu Buletin (BARU) --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 flex justify-between items-center">
                    <div>
                        <div class="text-gray-500 text-sm font-medium uppercase">Total Buletin</div>
                        <div class="text-3xl font-bold text-gray-800">{{ $totalBuletin ?? 0 }}</div>
                    </div>
                    <div class="p-3 bg-orange-100 rounded-full text-orange-600">
                        {{-- Icon Dokumen --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>

            </div>

            {{-- Tombol Cepat --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Aksi Cepat</h3>
                <div class="flex flex-wrap gap-4">
                    
                    {{-- Tambah Berita --}}
                    <a href="{{ route('admin.berita.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                        Tambah Berita
                    </a>

                    {{-- Tambah Program --}}
                    <a href="{{ route('admin.program.create') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-md text-sm font-medium flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                        Tambah Program
                    </a>

                    {{-- Tambah Buletin (BARU) --}}
                    <a href="{{ route('admin.buletin.create') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-md text-sm font-medium flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                        Tambah Buletin
                    </a>

                </div>
            </div>

        </div>
    </div>
</x-admin-layout>