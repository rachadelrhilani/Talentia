@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-6">Créer une Offre</h1>

<form method="POST" action="{{ route('recruteur.jobs.store') }}">
    @csrf

    <input name="title" placeholder="Titre"
        class="border p-2 w-full mb-3">

    <textarea name="description"
        class="border p-2 w-full mb-3"></textarea>

    <select name="contract_type" class="border p-2 w-full mb-3">
        <option>CDI</option>
        <option>CDD</option>
        <option>Stage</option>
    </select>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Publier
    </button>

</form>
@endsection