<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'amount' => 'required|numeric',
            'phone' => 'required|string',
            'player_id' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);
    
        // Initialize the image path variable
        $imagePath = null;
    
        // Check if an image is uploaded
        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');
            
            // Create a unique file name for the image
            $imageName = time() . '_' . $image->getClientOriginalName();
            
            // Store the image in the 'public/images' folder
            $image->move(public_path('images'), $imageName);
            
            // Save the path to the image in the database (relative path)
            $imagePath = 'images/' . $imageName;
        }
    
        // Create a new Payment record
        $payment = Payment::create([
            'name' => $request->name,
            'email' => $request->email,
            'amount' => $request->amount,
            'phone' => $request->phone,
            'player_id' => $request->player_id,
            'image_path' => $imagePath,
        ]);
    
        // Return a success response
        return response()->json($payment, 201);
    }
    
    public function index()
    {
        // Fetch all withdraw requests from the database
        $withdrawRequests = Payment::all();

        // Return the view with the withdraw requests data
        return view('withdraw_requests.index', compact('withdrawRequests'));
    }

}
