@extends('layouts.app')

@push('custom-css')
    <style>
        body {
            background-image: url('{{ asset('img/home-bg.jpg') }}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: 50% 30%;
        }


        .home-content .home-content-logo {
            max-width: 100%;
            width: 80%;
            height: auto;
        }

        .home-content p {
            font-family: Noto Sans Thai;
            font-size: 12px;
            font-weight: 600;
            line-height: 27px;
            text-align: left;
            color: #ffffff
        }

        .home-content span {
            font-family: Noto Sans Thai;
            font-size: 12px;
            font-weight: 500;
            line-height: 27px;
            text-align: left;
            color: #ffffff
        }

        .home-content .home-content-text-box {
            margin-top: 80px
        }

        .home-card {
            background: linear-gradient(0deg, rgba(40, 48, 48, 1) 25%, rgba(81, 87, 65, 1) 100%);
            background-size: contain;
            --bs-card-border-width: none;
        }

        .home-card p {
            font-family: Noto Sans Thai;
            font-size: 14px;
            font-weight: 700;
            line-height: 27px;
            text-align: left;
            margin-top: 80px
        }

        .home-card .svg-container {
            width: 40px;
            height: 40px;
        }
    </style>
@endpush


@section('content')
    <div class="container home-content mt-5">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('img/main-logo-white.png') }}" class="home-content-logo" alt="">
            </div>
            <div class="col-6">

            </div>
        </div>

        <div class="row home-content-text-box">
            <div class="col-8">
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

                            <div class="svg-container mt-4">
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

                            <div class="svg-container mt-4">
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

                            <div class="svg-container mt-4">
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
