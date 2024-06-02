@extends('layouts.app')

@push('custom-css')
    <style>
        body {
            padding-top: 0;
        }

        footer#footer {
            display: none !important;
        }

        nav#top-nav-bar {
            display: none !important;
        }

        .round {
            margin-left: 0;
        }

        .customer-registration-content .logo-box {
            width: 160px;
            height: auto;
            margin-bottom: 30px;
        }

        .customer-registration-content form {
            min-height: 350px
        }
    </style>
@endpush

@section('content')
    <div class="main-content-header text-center">
        <p class="title mb-0">ผลิตภัณฑ์</p>
        <p class="sub-title">(My Device)</p>
    </div>
    <div class="container customer-registration-content">
        <div class="d-block">

            <div class="logo-box d-block mx-auto">
                <img src="{{ asset('img/product.png') }}" alt="">
            </div>
            <form class="d-flex flex-column justify-content-between">
                <div>
                    <p class="form-title mb-0">ข้อมูลทั่วไปเกี่ยวกับผลิตภัณฑ์</p>
                </div>
                <hr class="yellow-line">
                <div>
                    <div class="form-group">
                        <label for="">ยี่ห้อผลิตภัณฑ์ (Product Name)</label>
                        <input type="text" class="form-control" aria-describedby="" placeholder="" value="MAVIC"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="">รุ่นผลิตภัณฑ์ (Model Name / Number)</label>
                        <input type="text" class="form-control" aria-describedby="" placeholder="" value="Mavic-3-Combo"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="">ยืนยันเลขลงทะเบียน (Reg No.)</label>
                        <input type="text" class="form-control" aria-describedby="" placeholder="" value="MA123456789"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="">ร้านค้า (Dealer Name)*</label>
                        <input type="text" class="form-control" aria-describedby="" placeholder="" value="DJI13Store"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="">ใบเสร็จรับเงิน (Reciept)</label>
                        <input type="text" class="form-control" aria-describedby="" placeholder="" value="ไม่มี"
                            disabled>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="form-title mb-0">ข้อมูลการประกันสินค้า</p>
                </div>
                <hr class="yellow-line">
                <div>
                    <div class="form-group">
                        <label for="">วันที่ลงทะเบียน (Regislation Date)</label>
                        <input type="text" class="form-control" aria-describedby="" placeholder="" value="สินค้านอกระบบ"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="">วันที่สิ้นสุดการรับประกันสินค้า <br>
                            (Warranty Expiration Date)</label>
                        <input type="text" class="form-control" aria-describedby="" placeholder="" value="สินค้านอกระบบ"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="">การเปิดใช้งาน (Activated)</label>
                        <input type="text" class="form-control" aria-describedby="" placeholder="" value="28/03/2567"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="">รูปภาพ (Picture)</label>
                        <input type="text" class="form-control" aria-describedby="" placeholder="" value="DJI13Store"
                            disabled>
                    </div>

                    <div class="col-12 mt-3">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                            data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block carousel-image" src="{{ asset('img/service-product/1.jpg') }}"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block carousel-image" src="{{ asset('img/service-product/2.jpg') }}"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block carousel-image" src="{{ asset('img/service-product/3.jpg') }}"
                                        alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="drone-registration" class="btn primary-btn">ลงทะเบียนโดรน</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('custom-script')
    <script>

    </script>
@endpush
