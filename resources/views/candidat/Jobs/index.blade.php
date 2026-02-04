@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-6">Offres disponibles</h1>

@foreach($jobs as $job)
<div class="bg-white p-4 rounded shadow mb-4">
    <h2 class="font-semibold">{{ $job->title }}</h2>
    <p class="text-gray-500">{{ $job->contract_type }}</p>

    <a href="{{ route('candidat.jobs.show',$job) }}"
       class="text-blue-600 mt-2 inline-block">
        Voir détail
    </a>
</div>
@endforeach

@endsection
