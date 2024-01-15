<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $user->load('profile'); // Assuming there is a 'profile' relationship defined in the User model
        
        return view('profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        $user->load('profile');
        
        return view('profile-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        
        // Validate the request data
        $data = $request->validate([
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'firstname'     => 'required|string|max:255',
            'lastname'      => 'required|string|max:255',
            'birthdate'     => 'required|date',
            'sex'           => 'required|in:male,female,other',
            'biography'     => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
            $data['profile_photo'] = $path;
        }

        // Update the profile
        $user->profile()->update($data);

        return redirect()->route('profile.show')->with('success', 'Profiel bijgewerkt.');
    }
}
