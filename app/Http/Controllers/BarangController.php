<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    // Menampilkan semua barang
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', compact('barangs'));
    }

    // Menampilkan form untuk membuat barang baru
    public function create()
    {
        return view('barangs.create');
    }

    // Menyimpan barang baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        Barang::create($request->all());
        return redirect()->route('barangs.index');
    }

    // Menampilkan form untuk mengedit barang
    public function edit(Barang $barang)
    {
        return view('barangs.edit', compact('barang'));
    }

    // Mengupdate barang
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $barang->update($request->all());
        return redirect()->route('barangs.index');
    }

    // Menghapus barang
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barangs.index');
    }

}
