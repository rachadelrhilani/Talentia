@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-6">Mes Offres</h1>

<a href="{{ route('recruteur.jobs.create') }}"
   class="bg-green-600 text-white px-4 py-2 rounded">
    Nouvelle Offre
</a>

@foreach($jobs as $job)
<div class="bg-white p-4 rounded shadow mt-4">
    <h2>{{ $job->title }}</h2>

    <a href="{{ route('recruteur.jobs.edit',$job) }}"
       class="text-blue-600">Modifier</a>

    <a href="{{ route('recruteur.jobs.applications',$job) }}"
       class="ml-4 text-purple-600">
       Voir candidatures
    </a>
</div>
@endforeach

@endsection
