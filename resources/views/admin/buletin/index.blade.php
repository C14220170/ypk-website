<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Buletin & Laporan') }}
            </h2>
            {{-- TOMBOL TAMBAH (ORANGE) --}}
            <a href="{{ route('admin.buletin.create') }}" class="bg-orange-600 text-white px-4 py-2 rounded-md hover:bg-orange-700 text-sm font-medium transition">
                + Tambah Buletin
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                {{-- Alert Sukses (Tetap Hijau agar standar sukses) --}}
                <div class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-left text-sm whitespace-nowrap">
                            <thead class="uppercase tracking-wider border-b-2 border-gray-200 bg-gray-50">
                                <tr>
                                    <th class="px-6 py-4">Cover</th>
                                    <th class="px-6 py-4">Title</th>
                                    <th class="px-6 py-4">Category</th>
                                    <th class="px-6 py-4">Link Drive/PDF</th>
                                    <th class="px-6 py-4 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($buletins as $item)
                                <tr class="border-b hover:bg-gray-50">
                                    {{-- IMAGE --}}
                                    <td class="px-6 py-4">
                                        @if($item->image)
                                            <img src="{{ asset('storage/' . $item->image) }}" class="w-12 h-16 object-cover rounded shadow-sm" alt="cover">
                                        @else
                                            <span class="text-gray-400 text-xs">No Cover</span>
                                        @endif
                                    </td>

                                    {{-- TITLE --}}
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        {{ $item->title }}
                                    </td>

                                    {{-- CATEGORY (Badge Orange Muda) --}}
                                    <td class="px-6 py-4">
                                        <span class="bg-orange-100 text-orange-800 text-xs font-semibold px-2.5 py-0.5 rounded border border-orange-200">
                                            {{ $item->category }}
                                        </span>
                                    </td>

                                    {{-- LINK (Teks Orange) --}}
                                    <td class="px-6 py-4">
                                        <a href="{{ $item->link }}" target="_blank" class="text-orange-600 hover:text-orange-800 underline flex items-center gap-1">
                                            Buka Link
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                        </a>
                                    </td>

                                    {{-- ACTION --}}
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center gap-3">
                                            {{-- Edit (Orange) --}}
                                            <a href="{{ route('admin.buletin.edit', $item->id) }}" class="text-blue-600 hover:text-blue-900 font-semibold">Edit</a>
                                            
                                            {{-- Hapus (Tetap Merah) --}}
                                            <form action="{{ route('admin.buletin.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus buletin ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada data buletin.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    {{-- Pagination --}}
                    <div class="mt-4">
                        {{ $buletins->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>