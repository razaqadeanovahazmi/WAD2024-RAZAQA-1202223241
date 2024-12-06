<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Manajemen Data Dosen & Mahasiswa Universitas EAD')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 240px;
            background-color: #343a40;
            color: #fff;
            padding: 20px;
        }
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
        }
        .sidebar a:hover {
            color: #fff;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .navbar-brand {
            font-size: 2rem; /* Normal font size */
            font-weight: bold;
        }
        .navbar-custom {
            justify-content: center; /* Align center */
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3 class="text-center mb-4">Manajemen Data</h3>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="bi bi-house-door-fill"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="{{ route('dosen.index') }}">
                        <i class="bi bi-people-fill"></i> Data Dosen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mahasiswa.index') }}">
                        <i class="bi bi-person-fill"></i> Data Mahasiswa
                    </a>
                </li>
            </ul>
            <hr>
            <p class="text-center text-muted"> 2024 Universitas WAD - 1202223241</p>
        </div>

        <!-- Content -->
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded mb-4 navbar-custom">
                <div class="container-fluid">
                    <span class="navbar-brand">@yield('title', 'Dashboard')</span>
                </div>
            </nav>

            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
