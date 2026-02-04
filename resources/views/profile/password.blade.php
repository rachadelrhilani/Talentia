@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('password.update') }}">
@csrf
@method('PUT')

<input type="password" name="current_password"
       placeholder="Ancien mot de passe"
       class="border p-2 w-full mb-3">

<input type="password" name="password"
       placeholder="Nouveau mot de passe"
       class="border p-2 w-full mb-3">

<input type="password" name="password_confirmation"
       placeholder="Confirmation"
       class="border p-2 w-full mb-3">

<button class="bg-blue-600 text-white px-4 py-2 rounded">
Modifier
</button>

</form>

@endsection
