<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    // Toon het profiel van de ingelogde gebruiker
    public function show()
    {
        dd(Auth::check()); // Dit zal 'true' dumpen als een gebruiker is ingelogd, 'false' anders.

        $user = Auth::user();
    
        return view('profile.show', compact('user'));
    }

    // Toon het bewerkingsformulier voor de ingelogde gebruiker
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    // Verwerk het bijwerken van het profiel
    public function update(Request $request, User $user)
    {
        $user = Auth::user();
        $data = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'sex' => 'required|string',
            'biography' => 'nullable|string',
            'profile_photo' => 'nullable|image|max:1999',
        ]);

        if ($request->hasFile('profile_photo')) {
            // Verwijder de oude foto als deze bestaat
            if ($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)) {
                Storage::disk('public')->delete($user->profile_photo);
            }

            // Sla de nieuwe foto op
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
            $data['profile_photo'] = $path;
        }

        $user->update($data);
        return back()->with('success', 'Profiel bijgewerkt');
    }
}