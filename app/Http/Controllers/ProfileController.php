<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Auth;


class ProfileController extends Controller
{

    public function __construct()
    {
        // Zorg ervoor dat de gebruiker ingelogd moet zijn om deze controller te gebruiken
        $this->middleware('auth');
    }

    public function showProfile(User $user)
    {
         
        return view ('profile', compact('user')); // Stuur naar de view
    }


    // Deze methode verwerkt de update van het profiel
    public function updateProfile(Request $request)
    {
        // Valideer eerst de input
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'sex' => 'required|string|in:male,female,other',
            'biography' => 'nullable|string',
            'profile_photo' => 'nullable|image|max:1999', // Maximaal ongeveer 2MB
        ]);

        // Controleer of de validatie faalt
        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        // Haal de huidige ingelogde gebruiker op
        $user = Auth::user();

        // Update de gebruiker met de gevalideerde data
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->birthdate = $request->birthdate;
        $user->sex = $request->sex;
        $user->biography = $request->biography;

        // Als een profielfoto is geüpload, verwerk deze
        if ($request->hasFile('profile_photo')) {
            // Sla de afbeelding op en genereer een unieke bestandsnaam
            $filenameWithExt = $request->file('profile_photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('profile_photo')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload de afbeelding
            $path = $request->file('profile_photo')->storeAs('public/profile_photos', $fileNameToStore);

            // Verwijder oude afbeelding indien aanwezig
            if ($user->profile_photo) {
                Storage::delete('public/profile_photos/'.$user->profile_photo);
            }

            // Sla de nieuwe afbeeldingsnaam op in de database
            $user->profile_photo = $fileNameToStore;
        }

        // Sla de geüpdatete gebruiker op
        $user->save();

        // Redirect terug naar de profielpagina met een successmelding
        return redirect()->route('profile')->with('success', 'Profiel bijgewerkt!');
    }
}
