<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'body' => 'required|string',
        ]);
    
        Comment::create([
            'body' => $request->body,
            'user_id' => Auth::id(),
        ]);
    
        return back()->with('success', 'Commentaar succesvol toegevoegd!');
    }
    public function index() {
        $comments = Comment::with('user') // Zorg ervoor dat je 'user' relatie in je Comment model hebt gedefinieerd
                        ->orderBy('created_at', 'desc') // Optioneel: sorteer de comments
                        ->get();
    
        return view('comments.index', compact('comments')); // Zorg ervoor dat je de juiste view naam gebruikt
    }
    public function reply(Request $request, Comment $comment) {
        // Controleer of de gebruiker admin is
        if (!auth()->user()->isAdmin()) {
            return back()->with('error', 'Geen toestemming.');
        }
    
        $request->validate([
            'body' => 'required|string',
        ]);
    
        // Antwoord opslaan
        $comment->replies()->create([
            'body' => $request->body,
            'user_id' => auth()->id(),
        ]);
    
        return back()->with('success', 'Antwoord succesvol toegevoegd.');
    }
}
