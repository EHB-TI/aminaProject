<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\CommentReply;
use App\Models\User;
use Auth;


class CommentReplyController extends Controller
{
    public function store(Request $request, Comment $comment) {
        $request->validate(['body' => 'required']);
        
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Alleen admins kunnen antwoorden.');
        }
    
        $comment->replies()->create([
            'user_id' => auth()->id(),
            'body' => $request->body
        ]);
    
        return back()->with('success', 'Antwoord succesvol toegevoegd.');
    }
    
}
