<!-- resources/views/profile.blade.php -->

@extends('base')

@section('content')
    <h2>Your Profile</h2>
    <form action="/profile" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">New Password (Leave empty to keep current password)</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm New Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
@endsection
