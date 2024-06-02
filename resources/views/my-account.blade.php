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

        .my-account-content .logo-box {
            width: 160px;
            height: auto;
            margin-bottom: 30px;
        }

        .my-account-content form {
            min-height: 350px
        }
    </style>
@endpush

@section('content')
    <div class="main-content-header text-center">
        <p class="title mb-0">บัญชีของฉัน</p>
        <p class="sub-title">(My Account)</p>
        <div class="bell-box-content">
            <img class="w-100" src="{{ asset('icon/bell.svg') }}" alt="">
            <div class="tag-bell-box-content">2</div>
        </div>
    </div>
    <div class="container my-account-content">
        <div class="d-block">

            <div class="logo-box d-block mx-auto">
                <img src="{{ asset('icon/user-image.svg') }}" alt="">
            </div>

            <div>
                <p class="form-title">ข้อมูลผู้ครอบครอง (Customer)</p>
            </div>

            <hr class="yellow-line">

            <div id="my_account_form_box">
                <form id="my_account_form" class="d-flex flex-column justify-content-between">
                    <div class="form-group">
                        <label for="">คำนำหน้า (Name Title)*</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="นาย" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">ชื่อ (First Name)*</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="สมใจนึก" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">นามสกุล (Last Name)*</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="บางยี่ขัน" disabled>
                    </div>

                    <div class="form-group">
                        <label for="">ที่อยู่ (Address)*</label>
                        <textarea class="form-control" name="" id="" rows="4" value="" disabled>176/658</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">จังหวัด (Province)*</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="นนทบุรี" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">เขต / อำเภอ (District)*</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="เมือง" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">แขวง / ตำบล (Sub-District)*</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="สวนใหญ่" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">รหัสไปรษณีย์ (Postal Code)*</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="11000" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">เบอร์โทรศัพท์ (Phone Number)*</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="0855536334" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">อีเมล (E-Mail)*</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="somjainuk@gmail.com" disabled>
                    </div>

                    <div id="nextdiv" class="d-flex justify-content-center">
                        <a onclick="enableFormElements()" class="btn primary-btn">แก้ไขข้อมูล</a>
                    </div>

                    <div id="submit-box" class="d-none">
                        <div class="row mt-3">
                            <div class="col-1">
                                <div class="round">
                                    <input type="checkbox" id="checkbox1" onclick="checkCheckboxes()" />
                                    <label for="checkbox1"></label>
                                </div>
                            </div>
                            <div class="col-11">
                                <p class="form-text">
                                    ท่านยินดีรับข้อมูลข่าวสาร การสื่อสาร สิทธิประโยชน์ และกิจกรรมต่างๆ ของบริษัท
                                </p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="/home" class="btn primary-btn">บันทึก</a>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>
@endsection

@push('custom-script')
    <script>
        function enableFormElements() {
            $(function() {

                var form = document.getElementById('my_account_form');
                var elements = form.elements;
                for (var i = 0; i < elements.length; i++) {
                    elements[i].disabled = false;
                }

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth' // Optional for smooth scrolling
                });

                $("#nextdiv").removeClass("d-flex").addClass("d-none");
                $("#submit-box").removeClass("d-none").addClass("d-block");
            });
        }
    </script>
@endpush
