@extends('components.header')

@section('content')
    <div class="container">
        <h1>User Profile</h1>

        <div class="profile-picture">
            @if(Auth::user()->profile_picture)
                <img src="{{ asset('storage/profile_pictures/' . Auth::user()->profile_picture) }}" alt="Profile Picture">

                @else
                <p>No profile picture added.</p>
            @endif
        </div>

        <!-- Display other user profile information -->
        <div class="profile-info">
            <p>Name: {{ Auth::user()->name }}</p>
            <p>Email: {{ Auth::user()->email }}</p>
            <!-- Add more profile information here -->
        </div>
    </div>
@endsection



