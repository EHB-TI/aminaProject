@extends('layouts.app')
@section('content')
      
      <div class="container">
    <h1>FAQs</h1>
    @foreach ($faqs as $faq)
        <div>
            <h2>{{ $faq->question }}</h2>
            <p>{{ $faq->answer }}</p>
        </div>
    @endforeach
</div>
@endsection
    