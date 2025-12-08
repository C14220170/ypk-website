<x-admin-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800">{{ __('Tambah Buletin') }}</h2></x-slot>

    <div class="py-12"><div class="max-w-3xl mx-auto sm:px-6 lg:px-8"><div class="bg-white p-6 shadow-sm sm:rounded-lg">
        <form action="{{ route('admin.buletin.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            
            {{-- Title --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Judul Buletin</label>
                {{-- Focus: Orange --}}
                <input type="text" name="title" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
            </div>

            {{-- Category --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Kategori</label>
                {{-- Focus: Orange --}}
                <select name="category" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
                    <option value="Buletin Bulanan">Buletin Bulanan</option>
                    <option value="Laporan Tahunan">Laporan Tahunan</option>
                    <option value="Laporan Kegiatan">Laporan Kegiatan</option>
                    <option value="Profil Organisasi">Profil Organisasi</option>
                </select>
            </div>

            {{-- Link --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Link Google Drive / PDF</label>
                {{-- Focus: Orange --}}
                <input type="url" name="link" placeholder="https://..." class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
            </div>

            {{-- Image --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Cover Gambar</label>
                {{-- File Button: Orange --}}
                <input type="file" name="image" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100 transition" required>
            </div>

            <div class="flex justify-end gap-2 pt-4">
                <a href="{{ route('admin.buletin.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition">Batal</a>
                {{-- Submit: Orange --}}
                <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded-md hover:bg-orange-700 transition font-medium">Simpan</button>
            </div>
        </form>
    </div></div></div>
</x-admin-layout>