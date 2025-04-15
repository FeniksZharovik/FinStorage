<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    // Halaman utama: daftar file
    public function index()
    {
        // Ambil semua file dari folder documents di storage/public
        $files = Storage::disk('public')->files('documents');

        return view('home', compact('files'));
    }

    // Menampilkan form upload
    public function showForm()
    {
        return view('upload');
    }

    // Menangani proses upload file
    public function upload(Request $request)
    {
        // Validasi file yang diupload
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Ambil file dari request
        $file = $request->file('file');

        // Buat nama file baru dengan UUID
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();

        // Simpan ke folder documents di disk public
        $path = $file->storeAs('documents', $filename, 'public');

        // Redirect kembali dengan pesan sukses
        return back()->with('success', "File uploaded: $path");
    }
}
