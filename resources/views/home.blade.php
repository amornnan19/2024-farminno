@extends('layouts.app')

@push('custom-css')
    <style>
        body {
            /* background-image: url('{{ asset('img/home-bg.jpg') }}'); */
            background: linear-gradient(0deg, rgba(15, 25, 34, 0.8) 20%, rgba(255, 255, 255, 0) 100%), url('{{ asset('/img/home-bg.jpg') }}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: 45%;
            background-size: cover;
        }


        .home-content .home-content-logo {
            width: 100%;
            max-width: 200px;
            height: auto;
        }

        .home-content p {
            font-size: 12px;
            font-weight: 600;
            line-height: 27px;
            color: #ffffff
        }

        .home-content span {
            font-size: 12px;
            font-weight: 500;
            line-height: 27px;
            color: #ffffff
        }

        .home-content .home-content-text-box {
            margin-top: 50px
        }

        .home-card {
            background: linear-gradient(0deg, rgba(40, 48, 48, 1) 0%, rgba(81, 87, 65, 1) 100%);
            background-size: contain;
            --bs-card-border-width: none;
            border: 0;
        }

        .home-card .card-body {
            padding: 15px 10px;
        }

        .home-card .card-body .card-text {
            font-size: 12px;
        }

        .home-card p {
            font-size: 14px;
            font-weight: 700;
            line-height: 27px;
            text-align: left;
            margin-top: 50px
        }

        .home-card .svg-container {
            width: 30px;
            height: 30px;
        }

        .bell-box {
            position: relative;
            display: inline-block;
        }

        .bell-box img {
            max-width: 40px;
            margin-right: 10px
        }

        .tag {
            position: absolute;
            top: 5px;
            right: 0;
            background-color: var(--main-color);
            color: white;
            padding: 0px 10px;
            border: 1px solid white;
            border-radius: 30%;
            font-size: 12px;
        }

        .home-top-nav-bar {
            background-color: rgba(255, 255, 255, 0.4) !important;
            min-height: 40px
        }
    </style>
@endpush


@section('content')
    <nav class="navbar navbar-expand-sm bg-body-tertiary fixed-top home-top-nav-bar d-block d-sm-none p-0">
        <div class="container-fluid">
        </div>
    </nav>
    <div class="container home-content">
        <div class="row d-flex justify-content-between">
            <div class="col">
                <img src="{{ asset('img/main-logo-white.png') }}" class="home-content-logo mt-3" alt="">
            </div>
            <div class="col" style="text-align: right;">
                <div class="bell-box">
                    <img class="w-100" src="{{ asset('icon/bell.svg') }}" alt="">
                    <div class="tag">2</div>
                </div>
            </div>
        </div>

        <div class="row home-content-text-box">
            <div class="col-10">
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur. Eu ultrices mauris lacus pellentesque aliquet. Enim nulla sed
                    non non massa. Morbi feugiat amet senectus in diam.
                </p>
                <span>
                    Ac sem aliquet gravida auctor interdum tellus eget ornare. Sagittis interdum ultrices orci vitae
                    phasellus nisl egestas in. Cursus purus urna lobortis lectus viverra lorem arcu amet. Pulvinar ut amet
                    tincidunt sed ornare iaculis justo semper eget. magna porttitor orci ultrices faucibus sit.
                </span>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-4">
                <div class="d-flex h-100">
                    <div class="card home-card flex-fill">
                        <div class="card-body">

                            <div class="svg-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </div>


                            <p class="card-text">FarmInno Thailand</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="d-flex h-100">
                    <div class="card home-card flex-fill">
                        <div class="card-body">

                            <div class="svg-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </div>

                            <p class="card-text">เว็บไซค์</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="d-flex h-100">
                    <div class="card home-card flex-fill">
                        <div class="card-body">

                            <div class="svg-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </div>

                            <p class="card-text">เงื่อนไข</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-script')
@endpush
