<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        // Validasi file
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Ambil file
        $file = $request->file('file');

        // Buat nama baru (gunakan timestamp atau UUID)
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();

        // Simpan ke storage/app/public/documents
        $path = $file->storeAs('documents', $filename, 'public');

        return back()->with('success', "File uploaded: $path");
    }
}
