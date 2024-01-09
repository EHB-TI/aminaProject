@extends('layouts.app')
@section('content')
   
      <div class="container">
    <h1>Profielpagina</h1>
    <div class="profile-info">
        <img src="{{ Storage::url($user->profile_photo) }}" alt="Profielfoto" class="profile-photo">
        <p><strong>Naam:</strong> {{ $user->firstname }}</p>
        <p><strong>Achternaam:</strong> {{ $user->lastname }}</p>
        <p><strong>Geboortedatum:</strong> {{ $user->birthdate }}</p>
        <p><strong>Geslacht:</strong> {{ $user->sex }}</p>
        <p><strong>Biografie:</strong> {{ $user->biography }}</p>
    </div>
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Bewerk Profiel</a>
</div>
@endsection
