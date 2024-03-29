@extends('layouts.app')
@section('content')
<div class="container comments-container">
        <h1 class="comments-title">Comments</h1>
  
        @auth
            <form action="{{ route('comment.store') }}" method="POST" class="comments-form">
                @csrf
                <div class="form-group comment-box">
                    <label for="body" class="comment-label">our comments</label>
                    <textarea name="body" id="body" rows="3" class="form-control comment-textarea"></textarea>
                </div>
                <button type="submit" class="btn btn-primary comment-submit-btn">send</button>
            </form>
        @endauth

         @foreach ($comments as $comment)
               <div class="card comment-card">
                  <div class="card-body">
                     <p class="card-text">{{ $comment->body }}</p>
                     <p class="card-text"><small class="text-muted">Posted by {{ $comment->user->name }} on {{ $comment->created_at }}</small></p>
                  </div>
         @endforeach

         @foreach ($comments as $comment)
    <!-- Comment weergave -->
    @if (auth()->check() && auth()->user()->isAdmin())
        <form action="{{ route('comment.reply', $comment) }}" method="POST">
            @csrf
            <textarea name="body"></textarea>
            <button type="submit">Antwoord</button>
        </form>
    @endif
@endforeach

@can('reply', $comment)
    <form method="POST" action="{{ route('comments.reply', $comment) }}">
        @csrf
        <textarea name="body"></textarea>
        <button type="submit">Antwoord</button>
    </form>
@endcan
               </div>
@endsection