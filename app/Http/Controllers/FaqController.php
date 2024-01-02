<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq; // Zorg ervoor dat je het correcte model gebruikt

class FaqController extends Controller
{
    // Methode om de FAQ pagina weer te geven
    public function index()
    {
        $faqs = Faq::all(); // Haalt alle FAQ's uit de database
        return view('faq', compact('faqs')); // Zorg ervoor dat je de juiste view naam gebruikt
    }

    // Methode om een specifieke FAQ te laten zien
    public function show(Faq $faq)
    {
        return view('faq', compact('faq')); // Zorg ervoor dat je de juiste view naam gebruikt
    }

    // Methode om een formulier voor het maken van een nieuwe FAQ weer te geven
    public function create()
    {
        return view('faq'); // Zorg ervoor dat je de juiste view naam gebruikt
    }

    // Methode om een nieuwe FAQ op te slaan
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required', // Pas de validatieregels aan zoals nodig
            'answer' => 'required',
        ]);

        Faq::create($request->all());

        return redirect()->route('faqs')
                         ->with('success', 'FAQ is succesvol toegevoegd.');
    }

    // Methode om een bestaande FAQ te bewerken
    public function edit(Faq $faq)
    {
        return view('faq', compact('faq')); // Zorg ervoor dat je de juiste view naam gebruikt
    }

    // Methode om een bestaande FAQ te updaten
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update($request->all());

        return redirect()->route('faqs')
                         ->with('success', 'FAQ is succesvol bijgewerkt.');
    }

    // Methode om een FAQ te verwijderen
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs')
                         ->with('success', 'FAQ is succesvol verwijderd.');
    }
}

