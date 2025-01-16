<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class menuController extends Controller
{
    public function index(Request $request)
    {
        $dataList = Menu::all();
        return view('menu', ['data' => $dataList]);
    }

    public function show($id)
    {
        $dataList = Menu::findOrFail($id);

        return view('menu-detail', ['data' => $dataList]);
    }

    public function menuAdd(Request $request)
    {
        return view('menuAdd');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'file' => 'nullable|mimes:pdf|max:2048',
        ]);

        $fotoPath = null;
        $filePath = null;

        // Upload foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '_foto.' . $foto->getClientOriginalExtension();
            $fotoPath = 'images/' . $fotoname;
            $foto->move('images', $fotoname);
        }

        // Upload file
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_file.' . $file->getClientOriginalExtension();
            $filePath = 'pdf/' . $filename;
            $file->move('pdf', $filename);
        }

        // Simpan data ke database
        Menu::create([
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
            'file' => $filePath,
        ]);

        return redirect('/menu')->with('success', 'Menu berhasil ditambahkan');
    }

    public function menuDelete($id)
    {
        $menu = Menu::findOrFail($id);

        // Delete foto if exists
        if ($menu->foto && File::exists(public_path($menu->foto))) {
            File::delete(public_path($menu->foto));
        }

        // Delete file if exists
        if ($menu->file && File::exists(public_path($menu->file))) {
            File::delete(public_path($menu->file));
        }

        $menu->delete();

        return redirect('/menu')->with('status', 'Category Deleted');
    }
}
