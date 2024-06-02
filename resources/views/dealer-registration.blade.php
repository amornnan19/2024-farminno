@extends('layouts.app')

@php
    $role = 'dealer';
@endphp

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
        <p class="title mb-0">บัญชีของฉัน</p>
        <p class="sub-title">(My Account)</p>
    </div>
    <div class="container customer-registration-content">
        <div id="form_box" class="d-block">

            <div class="logo-box d-block mx-auto">
                <img src="{{ asset('icon/user-image.svg') }}" alt="">
            </div>

            <div>
                <p class="form-title">ข้อมูลผู้ครอบครอง (Customer)</p>
            </div>

            <hr class="yellow-line">

            <div id="customer_registration_form">
                <form class="d-flex flex-column justify-content-between">
                    <div class="form-group">
                        <label for="">ชื่อตัวแทนจำหน่าย</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="">เบอร์โทรศัพท์ (Phone Number)*</label>
                        <input type="text" class="form-control" id="" aria-describedby=""
                            placeholder="0855566674" value="">
                    </div>
                    <div class="form-group">
                        <label for="">อีเมล (E-Mail)</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="">ที่อยู่ (Address)</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="">จังหวัด (Province)</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="">เขต / อำเภอ (District)</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="">แขวง / ตำบล (Sub-District)</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="">รหัสไปรษณีย์ (Postal Code)</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder=""
                            value="">
                    </div>
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
                        <a id="nextButton" class="btn primary-btn disabled">ยืนยัน</a>
                    </div>
                </form>
            </div>

        </div>

        <div id="form_login_box" class="d-none">
            <div class="logo-box d-block mx-auto">
                <img src="{{ asset('icon/user-default-image.svg') }}" alt="">
            </div>

            <div>
                <form id="customer_registration_cf_form" class="d-flex flex-column justify-content-between">

                    <table>
                        <tr>
                            <td>
                                <p class="mt-3 mb-3 form-label">ชื่อตัวแทนจำหน่าย:</p>
                            </td>
                            <td>
                                <p class="mt-3 mb-3 form-value">สไนเปอร์การบิน</p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p class="mt-3 mb-3 form-label">หมายเลขโทรศัพท์:</p>
                            </td>
                            <td>
                                <p class="mt-3 mb-3 form-value">0855566674</p>
                            </td>
                        </tr>

                    </table>

                    <div class="row mt-3">
                        <div class="col-1">
                            <div class="round">
                                <input type="checkbox" id="checkbox2" />
                                <label for="checkbox2"></label>
                            </div>
                        </div>
                        <div class="col-11">
                            <p class="form-text">
                                ท่านยินดีรับข้อมูลข่าวสาร การสื่อสาร สิทธิประโยชน์ และกิจกรรมต่างๆ ของบริษัท
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="/dealer-home" class="btn primary-btn">เข้าสู่ระบบ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        function checkCheckboxes() {
            const checkbox1 = document.getElementById('checkbox1');
            const nextButton = document.getElementById('nextButton');

            if (checkbox1.checked) {
                nextButton.classList.remove('disabled');
                nextButton.setAttribute('onclick', 'nextstepFunction()');
            } else {
                nextButton.classList.add('disabled');
                nextButton.removeAttribute('onclick');
            }
        }

        function nextstepFunction() {
            $(function() {
                $("#form_box").removeClass("d-block").addClass("d-none");
                $("#form_login_box").removeClass("d-none").addClass("d-block");
            });
        }
    </script>
@endpush