@extends('layouts.app')

@push('custom-css')
    <style>
        body {
            background-color: #0F1922;
        }

        .login-form {
            min-height: 550px
        }

        .login-form .card {
            background-color: #0F1922;
            border: none;
        }

        .login-form .logo {
            width: 100%;
            max-width: 208px;
        }

        .login-form p {
            font-size: 20px;
            font-weight: 700;
            line-height: 27px;
            text-align: center;
            color: white;
        }

        .login-form a {
            border-radius: 29px;
            height: 50px;
            width: 100%;
            max-width: 600px;
            font-size: 20px;
            font-weight: 700;
            line-height: 27px;
        }

        .login-form a.btn.btn-dark {
            background: #151515;
            color: #363636;
        }

        .loginfooter {
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 20px 0;
        }

        .loginfooter a {
            color: #363636;
            font-family: Noto Sans Thai;
            font-size: 18px;
            font-weight: 700;
            line-height: 27.2px;
            text-align: left;

        }

        @media (max-width: 414px) {
            .login-form p {
                font-size: 16px;
            }

            .login-form a {
                font-size: 16px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container">

        <div class="login-form row justify-content-center">
            <div class="col-md-12 d-flex flex-column justify-content-between">
                <div class="card">
                    <div class="card-body mt-5">
                        <div>
                            <p>เข้าสู่ระบบกับ</p>
                        </div>
                        <img class="logo d-block mx-auto mt-5" src="{{ asset('img/main-logo-white.png') }}" alt="Logo">

                        <div class="text-center mt-5">
                            <a href="/register" class="btn btn-light mt-5">ดำเนินการต่อด้วยหมายเลขโทรศัพท์
                                <svg class="ms-3" width="19" height="37" viewBox="0 0 19 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.207 0.946689C15.9164 0.368326 12.1509 0 9.76137 0C7.37487 0 3.60333 0.368326 2.31571 0.946689C1.05245 1.51288 0.544098 2.63307 0.544098 3.68326V33.3167C0.544098 34.37 1.05245 35.4871 2.31571 36.0533C3.60333 36.6317 7.37487 37 9.76137 37C12.1509 37 15.9164 36.6317 17.207 36.0533C18.4703 35.4871 18.9787 34.3669 18.9787 33.3167V3.6863C18.9787 2.63307 18.4703 1.51592 17.207 0.946689Z"
                                        fill="#006CA2" />
                                    <path
                                        d="M11.4569 2.29215H8.06893C7.98496 2.29215 7.90444 2.25879 7.84507 2.19942C7.7857 2.14005 7.75235 2.05953 7.75235 1.97557C7.75235 1.89161 7.7857 1.81108 7.84507 1.75171C7.90444 1.69234 7.98496 1.65899 8.06893 1.65899H11.4569C11.6335 1.65899 11.7735 1.79902 11.7735 1.97557C11.7735 2.14908 11.6335 2.29215 11.4569 2.29215Z"
                                        fill="white" />
                                    <path d="M2.21527 5.93278H17.3045V30.9089H2.21527V5.93278Z"
                                        fill="url(#paint0_linear_135_625)" />
                                    <path
                                        d="M5.00361 32.1783V32.3914L4.53787 32.0535L5.00361 31.7125V31.9256H5.27148C5.79505 31.9256 6.13294 32.0809 6.13294 32.5314C6.13294 32.9849 5.79505 33.1402 5.27148 33.1402H4.66877V32.8875H5.27148C5.71591 32.8875 5.88028 32.7901 5.88028 32.5314C5.88028 32.2757 5.71895 32.1783 5.27148 32.1783H5.00361ZM10.6472 33.055H8.90299V32.1752L9.77662 31.8069L10.6503 32.1752V33.055H10.6472ZM9.15564 32.7993H10.3946V32.3396L9.77662 32.0778L9.15564 32.3396V32.7993ZM14.7992 33.055H13.3381V32.1296H14.7992V33.055ZM13.5938 32.7993H14.5496V32.3822H13.5938V32.7993Z"
                                        fill="white" />
                                    <path d="M15.2133 32.5344H14.9606V31.9865H13.88V31.7339H15.2133V32.5344Z"
                                        fill="white" />
                                    <defs>
                                        <linearGradient id="paint0_linear_135_625" x1="9.76138" y1="30.9111"
                                            x2="9.76138" y2="5.934" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" />
                                            <stop offset="1" stop-color="#00A0D6" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card d-flex justify-content-center">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="/register" class="btn btn-dark">ตัวแทนจำหน่าย</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer class="loginfooter d-block">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <a href="">User</a>
                </div>
                <div class="col">
                    <a href="">Dealer</a>
                </div>
            </div>
        </div>
    </footer>
@endsection

@push('custom-script')
@endpush
