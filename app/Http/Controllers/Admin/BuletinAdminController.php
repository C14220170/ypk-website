<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buletin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BuletinAdminController extends Controller
{
    public function index()
    {
        $buletins = Buletin::latest()->paginate(10);
        return view('admin.buletin.index', compact('buletins'));
    }

    public function create()
    {
        return view('admin.buletin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|string',
            'link'     => 'required|url', // Pastikan format URL (http/https)
            'image'    => 'required|image|max:2048',
        ]);

        $data = $request->only('title', 'category', 'link');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('buletins', 'public');
        }

        Buletin::create($data);

        return redirect()->route('admin.buletin.index')->with('success', 'Buletin berhasil ditambahkan');
    }

    public function edit($id)
    {
        $buletin = Buletin::findOrFail($id);
        return view('admin.buletin.edit', compact('buletin'));
    }

    public function update(Request $request, $id)
    {
        $buletin = Buletin::findOrFail($id);

        $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|string',
            'link'     => 'required|url',
            'image'    => 'nullable|image|max:2048',
        ]);

        $data = $request->only('title', 'category', 'link');

        if ($request->hasFile('image')) {
            if ($buletin->image && Storage::disk('public')->exists($buletin->image)) {
                Storage::disk('public')->delete($buletin->image);
            }
            $data['image'] = $request->file('image')->store('buletins', 'public');
        }

        $buletin->update($data);

        return redirect()->route('admin.buletin.index')->with('success', 'Buletin berhasil diperbarui');
    }

    public function destroy($id)
    {
        $buletin = Buletin::findOrFail($id);
        if ($buletin->image && Storage::disk('public')->exists($buletin->image)) {
            Storage::disk('public')->delete($buletin->image);
        }
        $buletin->delete();
        return redirect()->route('admin.buletin.index')->with('success', 'Buletin dihapus');
    }
}