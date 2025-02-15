<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        // Store File in Storage
        $file = $request->file('file');
        $filePath = $file->store('pdfs', 'public');

        // Save File Path in Database
        $newFile = File::create([
            'name' => $file->getClientOriginalName(),
            'file_path' => $filePath,
        ]);

        return response()->json(['message' => 'File uploaded successfully!', 'file' => $newFile]);
    }

    public function index()
    {
        return response()->json(File::all());
    }

    public function download($id)
    {
        $file = File::findOrFail($id);
        return Storage::disk('public')->download($file->file_path, $file->name);
    }
}
