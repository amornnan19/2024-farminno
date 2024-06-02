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
    </style>
@endpush

@section('content')
    <div class="main-content-header text-center mb-2">
        <p class="title mb-0">ข้อมูลผลิตภัณฑ์</p>
        <p class="sub-title"></p>
        @include('include.bell-box-notification')
    </div>

    <div class="container dealer-product-detail-content">

        <h4 class="text-center mt-3">T40 Intelligent Battery</h4>
        <div class="row m-3">
            <div class="col-5 status-label">
                Serial Number :
            </div>
            <div class="col-7 status-text ">
                57ghikkjgghji9
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                วันที่ซื้อสินค้า:
            </div>
            <div class="col-7 status-text ">
                14/03/2024
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                ผู้ครอบครองสินค้า :
            </div>
            <div class="col-7 status-text ">
                จิราวรรณ ทรัพสิน
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                เบอร์โทร :
            </div>
            <div class="col-7 status-text ">
                098-2760656
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                ร้านค้า :
            </div>
            <div class="col-7 status-text ">
                บจ. เอ็มจีทีจี
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                ยืนยันเลขลงทะเบียน (Reg No.) :
            </div>
            <div class="col-7 status-text ">
                -
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                สถานะการลงทะเบียน:
            </div>
            <div class="col-7 status-text ">
                ลงทะเบียนแล้ว
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                วันที่สิ้นสุดการรับประกัน :
            </div>
            <div class="col-7 status-text ">
                13/03/2024
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                แบบฟอร์มขึ้นทะเบียนโดรน:
            </div>
            <div class="col-7 status-text ">
                <span class="status-black-badge">ยังไม่ลงทะเบียน</span>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-5 status-label">
                สถานะการซ่อม:
            </div>
            <div class="col-7 status-text ">
                <span class="status-warning-badge">อยู่ระหว่างดำเนินการ</span>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href="/dealer-service-status-detail" class="btn primary-btn f16px mt-5">แจ้งซ่อม</a>
        </div>
    </div>
@endsection

@push('custom-script')
    <script></script>
@endpush
