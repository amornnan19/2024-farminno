@extends('layouts.app')

@php
    $role = 'dealer';
@endphp

@push('custom-css')
    <style>
        body {
            padding-top: 0;
        }

        nav#top-nav-bar {
            display: none !important;
        }

        .round {
            margin-left: 0;
        }

        .dealer-home-content-container {
            margin: 10px 0;
            border-top: 1px solid rgba(15, 25, 34, 0.1);
            border-bottom: 1px solid rgba(15, 25, 34, 0.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dealer-home-content-box pt-2 {
            margin: 10px 0;
        }

        .dealer-home-content-container .top-left-label-yellow {
            position: absolute;
            border: none;
            margin-left: 0px;
            padding: 2px 5px 2px 2px;
            border-radius: 0px 0px 6px 0px;
            background-color: #D79928;
            color: white;
            font-size: 14px;
            font-weight: 700;
            line-height: 21.15px;
        }

        .dealer-home-content-container .top-left-label-disabled {
            position: absolute;
            border: none;
            margin-left: 0px;
            padding: 2px 5px 2px 2px;
            border-radius: 0px 0px 6px 0px;
            background-color: #B5B5B5;
            color: #DDDDDD;
            font-size: 14px;
            font-weight: 700;
            line-height: 21.15px;
        }

        .dealer-home-content-container a {
            text-decoration: none;
        }

        .status-warning-badge {
            padding: 2px;
            color: white !important;
        }

        .status-success-badge {
            padding: 2px;
            color: white !important;
        }

        .status-black-badge {
            padding: 2px;
            color: white !important;
        }

        .custom-nav-tabs .nav-link {
            border: none;
            border-bottom: 3px solid transparent;
            transition: border-bottom 0.3s ease;
            color: #B5B5B5;
            font-size: 18px;
            font-weight: 500;
        }

        .custom-nav-tabs .nav-link.active {
            border: none;
            border-bottom: 3px solid #D79928;
            color: #0F1922 !important;
            font-size: 18px;
            font-weight: 700;
        }

        .dealer-home-content-box .status-text {
            font-size: 14px;
            color: #1A1A1A;
        }

        .dealer-home-content-box .status-text span {
            color: #888888;
            font-weight: 600;
        }

        .img-box {
            height: 100px;
            overflow: hidden;
            position: relative;
        }

        .dealer-image {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            width: auto;
            /* Set width to auto */
        }
    </style>
@endpush

@section('content')
    <div class="main-content-header text-center mb-2">
        <p class="title mb-0">ผลิตภัณฑ์</p>
        <p class="sub-title">(Product)</p>

        @include('include.bell-box-notification')

    </div>
    <div class="container-fluid main-content-sub-header text-center drop-shadow pb-3">
        <div class="row search-box ">
            <div class="col" style="max-width: 50px">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.7536 13.5706L11.9212 10.7465C12.835 9.58229 13.3309 8.14459 13.329 6.66452C13.329 2.98381 10.3452 0 6.66452 0C2.98381 0 0 2.98381 0 6.66452C0 10.3452 2.98381 13.329 6.66452 13.329C8.14459 13.3309 9.58229 12.835 10.7465 11.9212L13.5706 14.7536C13.727 14.9113 13.94 15 14.1621 15C14.3842 15 14.5972 14.9113 14.7536 14.7536C14.9113 14.5972 15 14.3842 15 14.1621C15 13.94 14.9113 13.727 14.7536 13.5706ZM1.66613 6.66452C1.66613 3.90399 3.90399 1.66613 6.66452 1.66613C9.42506 1.66613 11.6629 3.90399 11.6629 6.66452C11.6629 9.42506 9.42506 11.6629 6.66452 11.6629C3.90399 11.6629 1.66613 9.42506 1.66613 6.66452Z"
                        fill="#989898" />
                </svg>
            </div>
            <div class="col text-start">ระบุรหัสสินค้าหรือสแกนคิวอาร์โค๊ด</div>
            <div class="col" style="max-width: 50px">
                <svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22.85 6.55556V4.33333C22.85 3.44928 22.4865 2.60143 21.8395 1.97631C21.1925 1.35119 20.315 1 19.4 1H15.95M15.95 21H19.4C20.315 21 21.1925 20.6488 21.8395 20.0237C22.4865 19.3986 22.85 18.5507 22.85 17.6667V15.4444M2.15 15.4444V17.6667C2.15 18.5507 2.51348 19.3986 3.16048 20.0237C3.80748 20.6488 4.685 21 5.6 21H9.05M9.05 1H5.6C4.685 1 3.80748 1.35119 3.16048 1.97631C2.51348 2.60143 2.15 3.44928 2.15 4.33333V6.55556M1 11H24"
                        stroke="#989898" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
        </div>

        <div class="document-tab" style="overflow: hidden">
            <div class="mt-3">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs justify-content-center w-100 custom-nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item flex-fill text-center">
                        <a class="nav-link active" id="tabOne-tab" data-toggle="tab" href="#tabOne" role="tab"
                            aria-controls="tabOne" aria-selected="true"
                            style="border-radius: 10px 0px 0px 0px;">ยี่ห้อทั้งหมด</a>
                    </li>
                    <li class="nav-item flex-fill text-center">
                        <a class="nav-link" id="tabTwo-tab" data-toggle="tab" href="#tabTwo" role="tab"
                            aria-controls="tabTwo" aria-selected="false" style="border-radius:0px 10px 0px 0px;">XAG</a>
                    </li>
                    <li class="nav-item flex-fill text-center">
                        <a class="nav-link" id="tabThree-tab" data-toggle="tab" href="#tabThree" role="tab"
                            aria-controls="tabThree" aria-selected="false" style="border-radius:0px 10px 0px 0px;">DJI</a>
                    </li>
                </ul>
                {{-- <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a class="nav-link active" id="tabOne-tab" data-toggle="tab" href="#tabOne" role="tab"
                                aria-controls="tabOne" aria-selected="true">ยี่ห้อทั้งหมด</a>
                        </div>
                        <div class="swiper-slide">
                            <a class="nav-link" id="tabTwo-tab" data-toggle="tab" href="#tabTwo" role="tab"
                                aria-controls="tabTwo" aria-selected="false">XAG</a>
                        </div>
                        <div class="swiper-slide">
                            <a class="nav-link" id="tabThree-tab" data-toggle="tab" href="#tabThree" role="tab"
                                aria-controls="tabThree" aria-selected="false">DJI</a>
                        </div>

                        <div class="swiper-slide">
                            <a class="nav-link" id="tabThree-tab" data-toggle="tab" href="#tabThree" role="tab"
                                aria-controls="tabThree" aria-selected="false">T40</a>
                        </div>
                    </div> --}}

            </div>
        </div>
    </div>

    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show p-3 active" id="tabOne" role="tabpanel" aria-labelledby="tabOne-tab">

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/1.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">T40 Intelligent battery</h4>
                                    การลงทะเบียนโดรน: <span class="status-warning-badge">อยู่ระหว่างดำเนินการ</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/2.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG P100 2022
                                        Agriculture Drone</h4>
                                    การลงทะเบียนโดรน: <span class="status-success-badge">ลงทะเบียนแล้ว</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/3.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG 2021 B13960S
                                        P-Series</h4>
                                    การลงทะเบียนโดรน: <span class="status-black-badge">ยังไม่ลงทะเบียน</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/1.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">T40 Intelligent battery</h4>
                                    การลงทะเบียนโดรน: <span class="status-warning-badge">อยู่ระหว่างดำเนินการ</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/2.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG P100 2022
                                        Agriculture Drone</h4>
                                    การลงทะเบียนโดรน: <span class="status-success-badge">ลงทะเบียนแล้ว</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/3.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG 2021 B13960S
                                        P-Series</h4>
                                    การลงทะเบียนโดรน: <span class="status-black-badge">ยังไม่ลงทะเบียน</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="tab-pane fade show p-3" id="tabTwo" role="tabpanel" aria-labelledby="tabTwo-tab">

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/2.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG P100 2022
                                        Agriculture Drone</h4>
                                    การลงทะเบียนโดรน: <span class="status-success-badge">ลงทะเบียนแล้ว</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/3.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG 2021 B13960S
                                        P-Series</h4>
                                    การลงทะเบียนโดรน: <span class="status-black-badge">ยังไม่ลงทะเบียน</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/1.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">T40 Intelligent battery</h4>
                                    การลงทะเบียนโดรน: <span class="status-warning-badge">อยู่ระหว่างดำเนินการ</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/2.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG P100 2022
                                        Agriculture Drone</h4>
                                    การลงทะเบียนโดรน: <span class="status-success-badge">ลงทะเบียนแล้ว</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/3.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG 2021 B13960S
                                        P-Series</h4>
                                    การลงทะเบียนโดรน: <span class="status-black-badge">ยังไม่ลงทะเบียน</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/1.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">T40 Intelligent battery</h4>
                                    การลงทะเบียนโดรน: <span class="status-warning-badge">อยู่ระหว่างดำเนินการ</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="tab-pane fade show p-3" id="tabThree" role="tabpanel" aria-labelledby="tabThree-tab">



            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/3.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG 2021 B13960S
                                        P-Series</h4>
                                    การลงทะเบียนโดรน: <span class="status-black-badge">ยังไม่ลงทะเบียน</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/1.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">T40 Intelligent battery</h4>
                                    การลงทะเบียนโดรน: <span class="status-warning-badge">อยู่ระหว่างดำเนินการ</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/2.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG P100 2022
                                        Agriculture Drone</h4>
                                    การลงทะเบียนโดรน: <span class="status-success-badge">ลงทะเบียนแล้ว</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/3.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG 2021 B13960S
                                        P-Series</h4>
                                    การลงทะเบียนโดรน: <span class="status-black-badge">ยังไม่ลงทะเบียน</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/1.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">T40 Intelligent battery</h4>
                                    การลงทะเบียนโดรน: <span class="status-warning-badge">อยู่ระหว่างดำเนินการ</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-fluid dealer-home-content-container p-0">
                <div class="top-left-label-yellow">Activated</div>
                <div class="container">
                    <a href="/dealer-product-detail">
                        <div class="dealer-home-content-box pt-2">
                            <div class="row mt-3 mb-3">
                                <div class="col-4 p-0 pr-3 text-end status-label">
                                    <div class="img-box">
                                        <img src="{{ asset('img/dealer/2.png') }}" class="dealer-image" alt="">
                                    </div>
                                </div>
                                <div class="col-8 p-0 status-text">
                                    <h4 class="primary-color f20px">XAG P100 2022
                                        Agriculture Drone</h4>
                                    การลงทะเบียนโดรน: <span class="status-success-badge">ลงทะเบียนแล้ว</span> <br>
                                    Serial Number: <span>5665698h34</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });


        document.querySelectorAll('.swiper-slide .nav-link').forEach(function(navLink) {
            navLink.addEventListener('click', function(event) {
                document.querySelectorAll('.swiper-slide .nav-link').forEach(function(link) {
                    link.classList.remove('active');
                });
                event.target.classList.add('active');
                var tabContentId = event.target.getAttribute('href');
                document.querySelectorAll('.tab-pane').forEach(function(tabPane) {
                    tabPane.classList.remove('show', 'active');
                });
                document.querySelector(tabContentId).classList.add('show', 'active');
            });
        });
    </script>
@endpush
