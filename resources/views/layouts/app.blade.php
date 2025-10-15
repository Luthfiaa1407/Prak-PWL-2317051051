<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #E8F5E9 0%, #FFFDE7 100%);
        }
        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;

        }
        footer {
            background: #a3c0a1ff;
            padding: 12px 0;
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-top: auto;
        }
        .navbar {
            background: #a3c0a1ff;
        }
        .navbar .nav-link, 
        .navbar .navbar-brand {
            color: #fff !important;
        }
        .navbar .nav-link:hover {
            color: #d4f5d0 !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Sistem Manajemen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Daftar Pengguna</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tambah User</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="container py-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer>
        &copy; {{ date('Y') }} · All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
