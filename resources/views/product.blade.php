@extends('layouts.app')

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

        .product-content-container {
            display: block;
        }

        .card {
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card .img-box {
            padding: 20px;
            padding-bottom: 0;
            max-height: 300px;
            overflow: hidden;
        }

        .card .product-title {
            margin: 0;
            font-size: 24px;
            font-weight: 800;
            color: #363636;
        }

        .card .product-sub-title {
            font-size: 16px;
            font-weight: 400;
            color: #7A7A7A;
            margin: 0;
        }

        .card .badge-box {
            text-align: center;
        }

        .card .status-warning-badge {
            padding-top: 15px;
            padding-bottom: 15px;
            border-radius: 10px;
        }

        .card .top-right-label-black {
            position: absolute;
            border: none;
            padding: 5px;
            border-radius: 10px;
            background-color: #0F1922;
            color: white;
            right: 0;
            font-size: 14px;
            font-weight: 600;
        }

        .card .top-right-label-warning {
            position: absolute;
            border: none;
            padding: 5px;
            border-radius: 10px;
            background-color: #D79928;
            color: white;
            right: 0;
            font-size: 14px;
            font-weight: 600;
        }
    </style>
@endpush

@section('content')
    <div class="main-content-header text-center mb-2">
        <p class="title mb-0">ผลิตภัณฑ์</p>
        <p class="sub-title">(My Device)</p>
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
    </div>

    <div class="container product-content-container">

        <a href="/product-detail">
            <div class="card mt-3 mb-3 w-100">
                <div class="top-right-label-black">ยังไม่ลงทะเบียน</div>
                <div class="img-box">
                    <img src="{{ asset('img/service-product/7.png') }}" class="card-img-top w-100" alt="">
                </div>
                <div class="row card-body">
                    <div class="col-7">
                        <p class="product-title">MAVIC</p>
                        <p class="product-sub-title">Mavic-3-Combo</p>
                    </div>
                    <div class="col-5 badge-box">
                        <p class="status-warning-badge">ประกัน 1 ปี</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="/product-detail">
            <div class="card mt-3 mb-3 w-100">
                <div class="top-right-label-warning">อยู่ระหว่างดำเนินการ</div>
                <div class="img-box">
                    <img src="{{ asset('img/service-product/8.png') }}" class="card-img-top w-100" alt="">
                </div>
                <div class="row card-body">
                    <div class="col-7">
                        <p class="product-title">MAVIC</p>
                        <p class="product-sub-title">Mavic-3-Combo</p>
                    </div>
                    <div class="col-5 badge-box">
                        <p class="status-warning-badge">ประกัน 1 ปี</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="/product-detail">
            <div class="card mt-3 mb-3 w-100">
                <div class="img-box">
                    <img src="{{ asset('img/service-product/9.png') }}" class="card-img-top w-100" alt="">
                </div>
                <div class="row card-body">
                    <div class="col-7">
                        <p class="product-title">MAVIC</p>
                        <p class="product-sub-title">Mavic-3-Combo</p>
                    </div>
                    <div class="col-5 badge-box">
                        <p class="status-warning-badge">ประกัน 1 ปี</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="/product-detail">
            <div class="card mt-3 mb-3 w-100">
                <div class="img-box">
                    <img src="{{ asset('img/service-product/10.png') }}" class="card-img-top w-100" alt="">
                </div>
                <div class="row card-body">
                    <div class="col-7">
                        <p class="product-title">MAVIC</p>
                        <p class="product-sub-title">Mavic-3-Combo</p>
                    </div>
                    <div class="col-5 badge-box">
                        <p class="status-warning-badge">ประกัน 1 ปี</p>
                    </div>
                </div>
            </div>
        </a>

    </div>
@endsection

@push('custom-script')
    <script></script>
@endpush
