@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold">{{ $user->name }}</h1>
<p class="mt-2">{{ $user->bio }}</p>

<a href="{{ route('profile.edit') }}"
   class="text-blue-600 mt-4 inline-block">
   Modifier profil
</a>

@endsection
