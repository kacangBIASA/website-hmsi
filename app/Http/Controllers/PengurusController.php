<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\Departemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengurusController extends Controller
{
    // ===== Halaman Publik =====
    public function index()
    {
        $departemenList = Departemen::with(['pengurus' => function ($query) {
            $query->orderByRaw("FIELD(jabatan,
            'Ketua Himpunan Mahasiswa',
            'Wakil Ketua Himpunan Mahasiswa',
            'Sekretaris Umum',
            'Sekretaris 1',
            'Bendahara Umum',
            'Bendahara 1',
            'Ketua Badan Senat',
            'Sekretaris Badan Senat',
            'Staff Badan Senat',
            'Ketua Departemen',
            'Sekretaris Departemen',
            'Staff Departemen',
            'Staff Magang'
        )");
        }])->get();

        return view('pengurus.index', compact('departemenList'));
    }


    // ===== Halaman Admin =====
    public function adminIndex()
    {
        $pengurusList = Pengurus::with('departemen')->latest()->get();
        return view('admin.pengurus.index', compact('pengurusList'));
    }

    public function create()
    {
        $departemenList = Departemen::all();
        return view('admin.pengurus.create', compact('departemenList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'departemen_id' => 'required|exists:departemen,id',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['departemen_id', 'nama', 'jabatan']);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('pengurus', 'public');
        }

        Pengurus::create($data);

        return redirect()->route('admin.pengurus.index')->with('success', 'Pengurus berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        $departemenList = Departemen::all();
        return view('admin.pengurus.edit', compact('pengurus', 'departemenList'));
    }

    public function update(Request $request, $id)
    {
        $pengurus = Pengurus::findOrFail($id);

        $request->validate([
            'departemen_id' => 'required|exists:departemen,id',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['departemen_id', 'nama', 'jabatan']);

        if ($request->hasFile('foto')) {
            if ($pengurus->foto) {
                Storage::disk('public')->delete($pengurus->foto);
            }
            $data['foto'] = $request->file('foto')->store('pengurus', 'public');
        }

        $pengurus->update($data);

        return redirect()->route('admin.pengurus.index')->with('success', 'Pengurus berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengurus = Pengurus::findOrFail($id);

        if ($pengurus->foto) {
            Storage::disk('public')->delete($pengurus->foto);
        }

        $pengurus->delete();

        return redirect()->route('admin.pengurus.index')->with('success', 'Pengurus berhasil dihapus.');
    }
}
