<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    {{-- Form Update --}}
                    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        {{-- TITLE --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Judul Berita</label>
                            <input 
                                type="text" 
                                name="title" 
                                {{-- Ubah 'judul' jadi 'title' --}}
                                value="{{ old('title', $berita->title) }}" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
                                required
                            >
                        </div>

                        {{-- IMAGE --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Gambar</label>
                            
                            {{-- Ubah $berita->gambar jadi $berita->image --}}
                            @if($berita->image)
                                <div class="my-2 p-2 border rounded-md inline-block">
                                    <img src="{{ asset('storage/' . $berita->image) }}" class="w-40 h-auto object-cover rounded">
                                </div>
                            @endif

                            {{-- name="image" --}}
                            <input type="file" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>

                        {{-- DESCRIPTION --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Isi Berita</label>
                            <textarea 
                                name="description" 
                                rows="10" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
                                required
                            >{{-- Ubah 'isi' jadi 'description' --}}{{ old('description', $berita->description) }}</textarea>
                        </div>

                        <div class="flex justify-end gap-2">
                            <a href="{{ route('admin.berita.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Batal</a>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Update Berita</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-adm>