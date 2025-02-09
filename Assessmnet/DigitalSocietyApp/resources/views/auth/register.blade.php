<!-- resources/views/register.blade.php -->
@extends('base')

@section('content')
    <h2>Create a New Account</h2>
    <form id="register-form" method="POST" action="/register">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#register-form').on('submit', function(e) {
            e.preventDefault();
            
            $.ajax({
                url: '/register',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    alert(response.message);
                    window.location.href = '/login'; // Redirect to login page after successful registration
                },
                error: function(xhr, status, error) {
                    alert('Error: ' + xhr.responseText);
                }
            });
        });
    </script>
@endsection
