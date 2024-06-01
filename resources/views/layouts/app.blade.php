<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farminno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('custom-css')

</head>

<body>


    <nav id="top-nav-bar" class="navbar navbar-expand-sm bg-body-tertiary fixed-top top-nav-bar d-none d-sm-block">
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


    @yield('content')



    <footer id="footer" class="footer d-block d-sm-none">
        <div class="container">
            <div class="row">
                <div class="col-3 text-center">
                    <a href="/" class="{{ request()->path() == 'home' ? 'active' : '' }}">
                        <div class="svg-box">
                            <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="currentColor" />
                            </svg>
                        </div>

                        <div>หน้าแรก</div>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="/service-status">
                        <div class="svg-box">
                            <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.285 10.3l1.43-1.43c.782-.782.782-2.047 0-2.83l-2.83-2.83c-.783-.783-2.048-.783-2.83 0l-1.43 1.43a2.5 2.5 0 00-.637 2.645l-8.49 8.49a2.5 2.5 0 10.707.707l8.49-8.49a2.5 2.5 0 002.645-.637z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div>สถานะซ่อม</div>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="#">
                        <div class="svg-box">
                            <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2l-5.5 9h11L12 2zm0 2.75L14.75 9h-5.5L12 4.75zM6 11l5.5 9 5.5-9H6zm1.75 2h8.5L12 18.25 7.75 13z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div>ผลิตภัณฑ์</div>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="#">
                        <div class="svg-box">
                            <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2a7 7 0 100 14 7 7 0 000-14zm0 2a5 5 0 110 10 5 5 0 010-10zm0 11c-3.35 0-9 1.68-9 5v2h18v-2c0-3.32-5.65-5-9-5zm0 2c2.87 0 6.44 1.42 6.93 3H5.07c.49-1.58 4.06-3 6.93-3z"
                                    fill="currentColor" />
                            </svg>
                        </div>

                        <div>บัญชี</div>
                    </a>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

    <script>
        $(function() {
            console.log("ready!");
        });
    </script>

    @stack('custom-script')
</body>

</html>
