@extends('layouts.app')
@section('content')


      <div class="container">
    <h1>Profiel Bewerken</h1>
    <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="profile_photo">Profielfoto</label>
            <input type="file" name="profile_photo" class="form-control-file">
        </div>
        
        <div class="form-group">
            <label for="firstname">Voornaam</label>
            <input type="text" name="firstname" class="form-control" value="{{ $user->firstname }}">
        </div>
        
        <div class="form-group">
            <label for="lastname">Achternaam</label>
            <input type="text" name="lastname" class="form-control" value="{{ $user->lastname }}">
        </div>
        
        <div class="form-group">
            <label for="birthdate">Geboortedatum</label>
            <input type="date" name="birthdate" class="form-control" value="{{ $user->birthdate }}">
        </div>
        
        <div class="form-group">
            <label for="sex">Geslacht</label>
            <select name="sex" class="form-control">
                <option value="male" {{ $user->sex == 'male' ? 'selected' : '' }}>Man</option>
                <option value="female" {{ $user->sex == 'female' ? 'selected' : '' }}>Vrouw</option>
                <option value="other" {{ $user->sex == 'other' ? 'selected' : '' }}>Overig</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="biography">Biografie</label>
            <textarea name="biography" class="form-control">{{ $user->biography }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Profiel Bijwerken</button>
    </form>
</div>
@endsection