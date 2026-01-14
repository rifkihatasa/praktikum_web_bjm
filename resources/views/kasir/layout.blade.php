<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kasir</title>

    {{-- Bootstrap --}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    >
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <span class="navbar-brand mb-0 h1">Sistem Kasir</span>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
