<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->paginate(6);
        return view('terhubung.berita.index', compact('beritas'));
    }

    public function show(Berita $berita)
    {
        return view('terhubung.berita.show', compact('berita'));
    }


    public function create()
    {
        return view('terhubung.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('berita.index')
                         ->with('success', 'Berita berhasil diposting.');
    }

    public function edit(Berita $berita)
    {
        return view('terhubung.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'image' => 'image|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('berita.index')
                         ->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()->route('berita.index')
                         ->with('success', 'Berita berhasil dihapus.');
    }
}
