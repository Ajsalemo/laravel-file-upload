<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadFile(Request $request)
    {
        // Max file size: 10MB
        $request->validate([
            'file' => 'required|file|max:10240',
        ]);
        // Store file in storage/app/uploads directory
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('uploads', $fileName); 

        return redirect()->back()->with('message', 'File uploaded successfully.');
    }
}
