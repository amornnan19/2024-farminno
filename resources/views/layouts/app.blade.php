<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farminno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('custom-css')
</head>

<body>

    @if (request()->path() != 'login' && request()->path() != 'register')
        <nav id="top-nav-bar" class="navbar navbar-expand-sm bg-body-tertiary fixed-top top-nav-bar">
            <div class="container-fluid">
                @if (request()->path() != '/' && request()->path() != 'home')
                    <div>
                        <img class="logo" src="{{ asset('img/main-logo.png') }}" alt="Logo">
                    </div>
                @endif
                <div class="navbar-collapse justify-content-end d-none">
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
    @endif

    @yield('content')


    @if (request()->path() != 'login' && request()->path() != 'register')
        <footer class="footer d-block d-sm-none">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <p>หน้าแรก</p>

                    </div>
                    <div class="col-3">
                        <p>สถานะซ่อม</p>

                    </div>
                    <div class="col-3">
                        <p>ผลิตภัณฑ์</p>

                    </div>
                    <div class="col-3">
                        <p> บัญชี</p>

                    </div>
                </div>
            </div>
        </footer>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    @stack('custom-script')
</body>

</html>
