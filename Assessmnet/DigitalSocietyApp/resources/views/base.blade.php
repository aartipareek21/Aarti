<!-- resources/views/base.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Society</title>
    <!-- Add your CSS files here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/">Home</a></li>
                        <li class="list-group-item"><a href="/login">Login</a></li>
                        <li class="list-group-item"><a href="/register">Register</a></li>
                        <li class="list-group-item"><a href="/profile">Profile</a></li>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-9">
                <div class="content">
                    @yield('content')  <!-- Dynamic content from each page will be placed here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Add your JavaScript files here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
