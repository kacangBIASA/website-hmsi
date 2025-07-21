<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemen;

class DepartemenController extends Controller
{
    public function index()
    {
        $departemenList = Departemen::latest()->get();
        return view('admin.departemen.index', compact('departemenList'));
    }

    public function create()
    {
        return view('admin.departemen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'penjelasan' => 'nullable|string',
            'tugas' => 'nullable|string',
        ]);

        Departemen::create([
            'nama' => $request->nama,
            'penjelasan' => $request->penjelasan,
            'tugas' => $request->tugas,
        ]);

        return redirect()->route('admin.departemen.index')->with('success', 'Departemen berhasil ditambahkan.');
    }

    public function edit(Departemen $departemen)
    {
        return view('admin.departemen.edit', compact('departemen'));
    }

    public function update(Request $request, Departemen $departemen)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'penjelasan' => 'nullable|string',
            'tugas' => 'nullable|string',
        ]);

        $departemen->update([
            'nama' => $request->nama,
            'penjelasan' => $request->penjelasan,
            'tugas' => $request->tugas,
        ]);

        return redirect()->route('admin.departemen.index')->with('success', 'Departemen berhasil diperbarui.');
    }

    public function destroy(Departemen $departemen)
    {
        $departemen->delete();

        return redirect()->route('admin.departemen.index')->with('success', 'Departemen berhasil dihapus.');
    }
}
