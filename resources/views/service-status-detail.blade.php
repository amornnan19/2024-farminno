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
    </style>
@endpush

@section('content')
    <div class="main-content-header text-center mb-2">
        <p class="title mb-0">สถานะซ่อม</p>
        <p class="sub-title">(Service Status)</p>
        <div class="bell-box-content">
            <img class="w-100" src="{{ asset('icon/bell.svg') }}" alt="">
            <div class="tag-bell-box-content">2</div>
        </div>
    </div>

    <div class="container service-status-detail-content">
        <div class="row m-3">
            <div class="col-5 status-label">
                สถานะ
            </div>
            <div class="col-7 status-text ">
                2024030028-00121-5170
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                ชื่อผลิตภัณฑ์:
            </div>
            <div class="col-7 status-text ">
                alongkon fuguoka
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                Serial Number:
            </div>
            <div class="col-7 status-text ">
                0243567890
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                สาเหตุ:
            </div>
            <div class="col-7 status-text ">
                ใบพัดไม่ทำงาน
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                การแก้ไข:
            </div>
            <div class="col-7 status-text ">
                เปลี่ยนมอเตอร์ใบพัด
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                วันที่เปิดงาน:
            </div>
            <div class="col-7 status-text ">
                10/03/2024
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                วันที่ส่งมอบงาน:
            </div>
            <div class="col-7 status-text ">
                อยู่ระหว่างซ่อม
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                วันที่ปิดงาน:
            </div>
            <div class="col-7 status-text ">
                -
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                ผู้เปิดงาน:
            </div>
            <div class="col-7 status-text ">
                alongkon fuguoka
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                เบอร์โทรผู้เปิดงาน:
            </div>
            <div class="col-7 status-text ">
                0243567890
            </div>
        </div>
        <div class="row m-3">
            <div class="col-12 status-label">
                รูปภาพอาการ:
            </div>
            <div class="col-12 mt-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
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
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-12 status-label">
                รูปภาพระหว่างซ่อม:
            </div>
            <div class="col-12 mt-3">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block carousel-image" src="{{ asset('img/service-product/2.jpg') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block carousel-image" src="{{ asset('img/service-product/3.jpg') }}"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block carousel-image" src="{{ asset('img/service-product/4.jpg') }}"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <hr>

        <div class="row m-3">
            <div class="col-5 status-label">
                ซีเรียลนัมเบอร์เดิม:
            </div>
            <div class="col-7 status-text ">
                4567-y446622
            </div>
        </div>

        <div class="row m-3">
            <div class="col-5 status-label">
                ชื่ออะไหลเดิม::
            </div>
            <div class="col-7 status-text ">
                -
            </div>
        </div>

        <div class="row m-3">
            <div class="col-12 status-label">
                รูปภาพอะไหล่เดิม:
            </div>
            <div class="col-12 mt-3">
                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block carousel-image" src="{{ asset('img/service-product/3.jpg') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block carousel-image" src="{{ asset('img/service-product/4.jpg') }}"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block carousel-image" src="{{ asset('img/service-product/5.jpg') }}"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <hr>

        <div class="row m-3">
            <div class="col-5 status-label">
                ซีเรียลนัมเบอร์ใหม่:
            </div>
            <div class="col-7 status-text ">
                DB 6778 79-987
            </div>
        </div>

        <div class="row m-3">
            <div class="col-5 status-label">
                ชื่ออะไหลเดิม::
            </div>
            <div class="col-7 status-text ">
                -
            </div>
        </div>

        <div class="row m-3">
            <div class="col-12 status-label">
                รูปภาพอะไหล่ใหม่:
            </div>
            <div class="col-12 mt-3">
                <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block carousel-image" src="{{ asset('img/service-product/4.jpg') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block carousel-image" src="{{ asset('img/service-product/5.jpg') }}"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block carousel-image" src="{{ asset('img/service-product/6.jpg') }}"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <p id="sendbtn" class="btn primary-btn f16px mt-5">แจ้งพบปัญหาการซ่อม</p>
            <p id="sendbtncf" class="btn primary-btn f16px mt-5 d-none">ยืนยันการส่งมอบงานซ่อม</p>
        </div>
    </div>

    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid w-100" id="modalImage" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        $(document).ready(function() {
            $('.carousel-image').on('click', function() {
                var src = $(this).attr('src');
                $('#modalImage').attr('src', src);
                $('#imageModal').modal('show');
            });

            $('#sendbtn').on('click', function() {
                $("#sendbtn").addClass("d-none");
                $("#sendbtncf").removeClass("d-none").addClass("d-block");
            });

            $("#sendbtncf").on("click", function() {
                window.location.replace("/product");
            });
        });
    </script>
@endpush
