<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistem Informasi Alumni </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div id="app">

        <main>

            <div class="container-fluid login">
                <div class="d-flex w-100 h-100">
                    <div class="left">
                        <div class="text-absolute">
                            SMK <br> HARAPAN
                        </div>
                        <div class="contain rounded border border-3">
                            <div class="w-100 d-flex top justify-content-between">
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>

                            <p class="fs-3 text-white">
                                SMK Harapan Bangsa didirikan dibawah naungan Yayasan Reste Nur Insani yang merupakan
                                institusi
                                pendidikan formal mempunyai visi misi dan strategi baru dalam proses pembelajaran.
                            </p>
                            <div class="w-100 d-flex bottom justify-content-between">
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                    <div class="right">

                        <div class="text-absolute">
                            <span>HARAPAN</span>
                            BANGSA
                        </div>

                        @yield('content')
                    </div>
                </div>

            </div>


        </main>
    </div>
</body>

</html>
