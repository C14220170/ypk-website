<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(6); // 6 per page
        return view('tentang.program.index', compact('programs'));
    }

    public function show(Program $program)
    {
        return view('tentang.program.show', compact('program'));
    }


    public function create()
    {
        return view('tentang.program.create');
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
            $data['image'] = $request->file('image')->store('programs', 'public');
        }

        Program::create($data);

        return redirect()->route('tentang.program.index')
                         ->with('success', 'Program berhasil ditambahkan.');
    }

    public function edit(Program $program)
    {
        return view('tentang.program.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('programs', 'public');
        }

        $program->update($data);

        return redirect()->route('tentang.program.index')
                         ->with('success', 'Program berhasil diupdate.');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('tentang.program.index')
                         ->with('success', 'Program berhasil dihapus.');
    }
}
