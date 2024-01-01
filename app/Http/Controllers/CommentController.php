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
}
