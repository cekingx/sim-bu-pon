<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        {{-- navbar --}}

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">SIM Buk Pon</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Daftar Harga</a>
                    <a class="nav-item nav-link" href="https://github.com/cekingx/sim-bu-pon">Source Code</a>
                </div>
            </div>
        </nav>

        {{-- /navbar --}}

        <div class="d-flex justify-content-center">
            <div class="d-flex-column">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <span class="text-muted">Dirga Yasa | 1705551062</span>
                </div>
            </div>
        </footer>

        <script src="js/app.js"></script>
    </body>
</html>
