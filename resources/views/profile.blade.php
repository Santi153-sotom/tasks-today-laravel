@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <p class="eyebrow">Account</p>
    <h1>Profile</h1>
    <p class="lead">The user record stored in the database.</p>

    @if ($user)
        <div class="card">
            <p><strong>Full name:</strong> {{ $user->full_name }}</p>
            <p><strong>Username:</strong> {{ $user->username }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </div>
    @else
        <div class="card">
            <p>No user profile was found.</p>
        </div>
    @endif
@endsection