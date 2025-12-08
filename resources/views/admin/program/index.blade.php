<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Program') }}
            </h2>
            <a href="{{ route('admin.program.create') }}" class="bg-emerald-600 text-white px-4 py-2 rounded-md hover:bg-emerald-700 text-sm">
                + Tambah Program
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
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
                                    <th class="px-6 py-4">Image</th>
                                    <th class="px-6 py-4">Title</th>
                                    <th class="px-6 py-4">Created</th>
                                    <th class="px-6 py-4 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($programs as $item)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-6 py-4">
                                        @if($item->image)
                                            <img src="{{ asset('storage/' . $item->image) }}" class="w-16 h-16 object-cover rounded" alt="img">
                                        @else
                                            <span class="text-gray-400 text-xs">No Image</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 font-medium">{{ $item->title }}</td> 
                                    <td class="px-6 py-4 text-gray-500">{{ $item->created_at->format('d M Y') }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center gap-3">
                                            <a href="{{ route('admin.program.edit', $item->id) }}" class="text-blue-600 hover:text-blue-900 font-semibold">Edit</a>
                                            <form action="{{ route('admin.program.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus program ini?')">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada program.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">{{ $programs->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>