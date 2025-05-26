<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-image:url(https://wallpapers.com/images/featured/1pf6px6ryqfjtnyr.jpg);
        }
        .navbar {background: linear-gradient(to right,rgb(85, 39, 112),rgb(111, 93, 139));}
        .navbar-brand { color: white !important; }
        .card { transition: transform 0.2s; }
        .card:hover { transform: translateY(-5px); box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .btn-group { gap: 0.5rem; }
        .post-content { max-height: 150px; overflow: hidden; }
        .footer {
            margin-top: auto;
            background: linear-gradient(to right,rgb(85, 39, 112),rgb(111, 93, 139));
            color: white;
            padding: 1rem 0;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
        }
        .footer p {
            margin: 0;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer-links {
            display: flex;
            gap: 1.5rem;
        }
        .footer-links a {
            color: white;
            text-decoration: none;
            transition: opacity 0.2s;
        }
        .footer-links a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">
                <i class="fas fa-blog me-2"></i>My FOOD BLOG
            </a>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; {{ date('Y') }} Food Blog | All Rights Reserved</p>
                <div class="footer-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto-hide alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        });
    </script>
</body>
</html>