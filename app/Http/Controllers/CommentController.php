<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::with('user')->get();
        return view('comments.index', compact('comments'));
    }

    public function store(Request $request) {
        $request->validate([
            'body' => 'required|string',
        ]);

        Auth::user()->comments()->create($request->only('body'));

        return back()->with('success', 'Commentaar toegevoegd!');
    }
}
