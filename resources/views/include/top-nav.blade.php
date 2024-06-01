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
