<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Auth;
use Dotenv\Exception\ValidationException;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function showProfile()
    {
        $user = Auth::user(); // Get the currently authenticated user
        return view('customer.profile.profile', compact('user'));
    }

   
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Add validation rules for other fields if you make them editable
        ]);

        $user->update($validatedData);

        return redirect()->route('customer.profile.show')->with('success', 'Profile updated successfully!');
    }

    
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();
        
        if (!Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['The provided password does not match your current password.'],
            ]);
        }

        $user->forceFill([
            'password' => Hash::make($request->password),
        ])->save();

        return redirect()->route('customer.profile.show')->with('success', 'Password updated successfully!');
    }
}
