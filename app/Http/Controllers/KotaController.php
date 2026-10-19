<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Propinsi;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index()
    {
        $kota = Kota::with('getPropinsi')->orderBy('id', 'DESC')->paginate(5);

        return view('kota.index', compact('kota'));
    }

    public function create()
    {
        $propinsi = Propinsi::all();

        return view('kota.create', compact('propinsi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_propinsi' => 'required|exists:propinsi,id',
            'nama_kota' => 'required|string|max:255',
        ]);

        Kota::create($request->only([
            'id_propinsi',
            'nama_kota',
        ]));

        return redirect()
            ->route('kota.index')
            ->with('success', 'Data kota berhasil ditambahkan.');
    }

    public function show(Kota $kota)
    {
        return view('kota.show', compact('kota'));
    }

    public function edit(Kota $kota)
    {
        $propinsi = Propinsi::all();

        return view('kota.edit', compact('kota', 'propinsi'));
    }

    public function update(Request $request, Kota $kota)
    {
        $request->validate([
            'id_propinsi' => 'required|exists:propinsi,id',
            'nama_kota' => 'required|string|max:255',
        ]);

        $kota->update($request->only([
            'id_propinsi',
            'nama_kota',
        ]));

        return redirect()
            ->route('kota.index')
            ->with('success', 'Data kota berhasil diperbarui.');
    }

    public function destroy(Kota $kota)
    {
        $kota->delete();

        return redirect()
            ->route('kota.index')
            ->with('success', 'Data kota berhasil dihapus.');
    }
}