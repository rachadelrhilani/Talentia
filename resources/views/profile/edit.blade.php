@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">

<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="mb-4">
        <label>Nom complet</label>
        <input type="text" name="name" value="{{ auth()->user()->name }}" class="border p-2 w-full">
    </div>

    <div class="mb-4">
        <label>Bio</label>
        <textarea name="bio" class="border p-2 w-full">{{ auth()->user()->bio }}</textarea>
    </div>

    <div class="mb-4">
        <label>Photo de profil</label>
        <input type="file" name="photo">
    </div>

    @role('candidat')
        <h2 class="font-bold mb-4 border-t pt-4">Profil Candidat</h2>
        <input type="text" name="title" value="{{ $profile->title ?? '' }}" class="border p-2 w-full mb-4" placeholder="Titre du profil">
        
        <label>Compétences</label>
        <select name="skills[]" multiple class="border p-2 w-full">
            @foreach($skills as $skill)
                <option value="{{ $skill->id }}" @if(isset($profile) && $profile->skills->contains($skill->id)) selected @endif>
                    {{ $skill->name }}
                </option>
            @endforeach
        </select>
    @endrole

    @role('recruteur')
        <h2 class="font-bold mb-4 border-t pt-4">Entreprise</h2>
        <input type="text" name="company_name" value="{{ $company->name ?? '' }}" class="border p-2 w-full mb-4" placeholder="Nom entreprise">

        <textarea name="company_description" class="border p-2 w-full mb-4" placeholder="Description entreprise">{{ $company->description ?? '' }}</textarea>
    @endrole

    <button class="bg-blue-600 text-white px-4 py-2 rounded mt-4">Mettre à jour</button>
</form>

</div>

@endsection
