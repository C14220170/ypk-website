<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Buletin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('admin.buletin.update', $buletin->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        {{-- TITLE --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Judul Buletin</label>
                            {{-- Focus: Orange --}}
                            <input 
                                type="text" 
                                name="title" 
                                value="{{ old('title', $buletin->title) }}" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" 
                                required
                            >
                            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        {{-- CATEGORY --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Kategori</label>
                            {{-- Focus: Orange --}}
                            <select name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Buletin Bulanan" {{ old('category', $buletin->category) == 'Buletin Bulanan' ? 'selected' : '' }}>Buletin Bulanan</option>
                                <option value="Laporan Tahunan" {{ old('category', $buletin->category) == 'Laporan Tahunan' ? 'selected' : '' }}>Laporan Tahunan</option>
                                <option value="Laporan Kegiatan" {{ old('category', $buletin->category) == 'Laporan Kegiatan' ? 'selected' : '' }}>Laporan Kegiatan</option>
                                <option value="Profil Organisasi" {{ old('category', $buletin->category) == 'Profil Organisasi' ? 'selected' : '' }}>Profil Organisasi</option>
                            </select>
                            @error('category') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        {{-- LINK --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Link Google Drive / PDF</label>
                            {{-- Focus: Orange --}}
                            <input 
                                type="url" 
                                name="link" 
                                value="{{ old('link', $buletin->link) }}" 
                                placeholder="https://..."
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" 
                                required
                            >
                            @error('link') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        {{-- IMAGE --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Cover Gambar</label>
                            
                            @if($buletin->image)
                                <div class="my-3 p-2 border rounded-md inline-block bg-gray-50">
                                    <p class="text-xs text-gray-500 mb-1">Cover Saat Ini:</p>
                                    <img src="{{ asset('storage/' . $buletin->image) }}" class="w-32 h-auto object-cover rounded shadow-sm">
                                </div>
                            @endif

                            {{-- File Button: Orange --}}
                            <input type="file" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100 transition">
                            <p class="text-xs text-gray-500 mt-1">*Kosongkan jika tidak ingin mengubah cover.</p>
                            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        {{-- TOMBOL --}}
                        <div class="flex justify-end gap-2 pt-4">
                            <a href="{{ route('admin.buletin.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition">Batal</a>
                            {{-- Submit: Orange --}}
                            <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded-md hover:bg-orange-700 transition font-medium">Update Buletin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>