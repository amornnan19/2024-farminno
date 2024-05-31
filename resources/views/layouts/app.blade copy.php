<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;300;400;500;600;700;800;900&display=swap">
</head>

<style>
    body {
        font-family: 'Noto Sans Thai', sans-serif;
    }

    .top-nav-bar .logo {
        width: 208px;
        height: auto;
    }

    a.active {
        color: #D79928 !important;
    }
</style>

<body>
    <nav id="top-nav-bar" class="navbar navbar-expand-lg bg-body-tertiary fixed-top top-nav-bar">
        <div class="container-fluid">

            @if (request()->path() != '/' && request()->path() != 'home')
                <div>
                    <img class="logo" src="{{ asset('img/main-logo.png') }}" alt="Logo">
                </div>
            @endif


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">สถานะซ่อม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ผลิตภัณฑ์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">บัญชี</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="main-content-box" class="container mt-5">
        @yield('content')
    </div>

    {{-- <style>
        .contentsss {
            position: sticky;
            bottom: 0;
            width: 100%;
            background-color: #f0f0f0;
        }
    </style>

    <div class="contentsss">
        ฟหกฟหก
    </div> --}}

    <style>
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #343a40;
            /* สีพื้นหลังของ Footer */
            color: #fff;
            /* สีข้อความของ Footer */
            text-align: center;
            padding: 10px 0;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">Your Brand</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var nav = document.getElementById("top-nav-bar");
            var navHeight = nav.clientHeight;
            var content = document.getElementById("main-content-box");
            content.style.paddingTop = navHeight + "px";
        });
    </script>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

</body>

</html>
