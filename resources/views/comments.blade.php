@extends('layouts.app')
@section('content')
   
    <h1>Comments</h1>
  
  @auth
      <form action="{{ route('comment.store') }}" method="POST">
          @csrf
          <div class="form-group">
              <label for="body">our comments</label>
              <textarea name="body" id="body" rows="3" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">send</button>
      </form>
  @endauth
</div>
@endsection
