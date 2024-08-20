<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class QrCodeController extends Controller
{
    public function updateQr(Request $request)
    {
        $request->validate([
            'qr_code' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $directory = public_path('images');
        $existingImage = $directory . '/qr_code.png'; // Assuming the image is saved as 'qr_code.png'

        // Delete the existing image if it exists
        if (File::exists($existingImage)) {
            File::delete($existingImage);
        }

        // Save the new image
        $imageName = 'qr_code.' . $request->qr_code->extension();  
        $request->qr_code->move($directory, $imageName);

        return back()->with('success', 'QR Code uploaded successfully.');
    }
}
