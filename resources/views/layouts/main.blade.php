<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Laravel Taufik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Blog Pertama</a>
            <div>
                <a class="btn btn-outline-light" href="/">Home</a>
                <a class="btn btn-outline-light" href="/profil">Profil</a>
                <a class="btn btn-outline-light" href="/galeri">Galeri</a>
                <a class="btn btn-outline-light" href="/kontak">Kontak</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="bg-dark text-white text-center p-3 mt-4">
        <p>© 2025 Taufik Firduas - Blog Pertama</p>
    </footer>
</body>
</html>
