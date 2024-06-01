@extends('layouts.app')

@push('custom-css')
    <style>
        footer#footer {
            display: none !important;
        }

        nav#top-nav-bar {
            display: none !important;
        }

        .register-content .logo {
            width: 100%;
            max-width: 208px;
        }

        .register-content form {
            min-height: 350px
        }

        .register-content .opt-box {
            width: 45px;
            height: 46px;
        }

        .register-content .form-link {
            color: #D79928;
            font-size: 16px;
            font-weight: 700;
            line-height: 24.18px;
        }

        .register-content div#consent_form span {
            font-size: 16px;
            font-weight: 700;
            line-height: 20px;
            color: #707070;
        }
    </style>
@endpush

@section('content')
    <div class="container register-content">

        <div>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.75 22.5L11.25 15L18.75 7.5" stroke="black" stroke-width="2.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>

        <div class="mb-4">
            <img class="logo d-block mx-auto" src="{{ asset('img/main-logo.png') }}" alt="Logo">
        </div>

        <div id="phone_form" class="d-block">

            <div class="mt-3 mb-3">
                <p class="title">กรุณากรอกเบอร์โทรศัพท์ของคุณ <br> เพื่อดำเนินการต่อ</p>
            </div>

            <form class="d-flex flex-column justify-content-between">
                <div>
                    <div class="form-group">
                        <label for="phone_number">กรุณากรอกหมายเลขโทรศัพท์</label>
                        <input type="text" class="form-control" id="phone_number" aria-describedby="" placeholder="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="btn primary-btn" onclick="submit_phone_number()">ถัดไป</p>
                </div>
            </form>
        </div>

        <div id="opt_form" class="d-none">

            <div class="mt-3 mb-3">
                <p class="title">กรุณาใส่รหัส OTP ยืนยัน <br> เพื่อสมัครสมาชิก</p>
            </div>

            <form class="d-flex flex-column justify-content-between">

                <div class="form-group mt-3">
                    <label for="opt1">กรุณากรอกรหัส OTP</label>
                    <div class="d-flex justify-content-center mt-3">
                        <input type="text" class="form-control m-1 opt-box" id="opt1" aria-describedby=""
                            placeholder="" maxlength="1">
                        <input type="text" class="form-control m-1 opt-box" id="opt2" aria-describedby=""
                            placeholder="" maxlength="1">
                        <input type="text" class="form-control m-1 opt-box" id="opt3" aria-describedby=""
                            placeholder="" maxlength="1">
                        <input type="text" class="form-control m-1 opt-box" id="opt4" aria-describedby=""
                            placeholder="" maxlength="1">
                        <input type="text" class="form-control m-1 opt-box" id="opt5" aria-describedby=""
                            placeholder="" maxlength="1">
                        <input type="text" class="form-control m-1 opt-box" id="opt6" aria-describedby=""
                            placeholder="" maxlength="1">
                    </div>
                    <div class="form-link d-flex justify-content-center mt-3">
                        <p><u>รับรหัส OTP อีกครั้ง</u></p>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <p class="btn primary-btn" onclick="submit_opt()">ถัดไป</p>
                </div>
            </form>
        </div>

        <div id="consent_form" class="d-none">

            <div class="mt-3 mb-3">
                <p class="title main-btn-color">ข้อกำหนดและเงื่อนไข</p>
            </div>

            <div class="mt-3 mb-3">
                <p class="title">กรุณาใส่รหัส OTP ยืนยัน <br> เพื่อสมัครสมาชิก</p>
            </div>

            <form class="d-flex flex-column justify-content-between">

                <div class="form-group mt-3">
                    <div class="row">
                        <div class="col-2">
                            <div class="round">
                                <input type="checkbox" id="checkbox1" onclick="checkCheckboxes()" />
                                <label for="checkbox1"></label>
                            </div>
                        </div>
                        <div class="col-10">
                            <span>ข้าพเจ้าได้อ่านและทำความเข้าใจ <a href="http://" target="_blank"
                                    rel="noopener noreferrer">ข้อกำหนดและเงื่อนไข
                                    เรียบร้อยแล้ว</a> </span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <div class="round">
                                <input type="checkbox" id="checkbox2" onclick="checkCheckboxes()" />
                                <label for="checkbox2"></label>
                            </div>
                        </div>
                        <div class="col-10">
                            <span>ข้าพเจ้าได้อ่านและทำความเข้าใจ <a href="http://" target="_blank"
                                    rel="noopener noreferrer">ข้อกำหนดและเงื่อนไข
                                    เรียบร้อยแล้ว</a> </span>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <a id="nextButton" class="btn primary-btn disabled">ถัดไป</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        function submit_phone_number() {
            $(function() {
                $("#phone_form").removeClass("d-block").addClass("d-none");
                $("#opt_form").removeClass("d-none").addClass("d-block");
            });
        }

        function submit_opt() {
            $(function() {
                $("#opt_form").removeClass("d-block").addClass("d-none");
                $("#consent_form").removeClass("d-none").addClass("d-block");
            });
        }

        function checkCheckboxes() {
            const checkbox1 = document.getElementById('checkbox1');
            const checkbox2 = document.getElementById('checkbox2');
            const nextButton = document.getElementById('nextButton');

            if (checkbox1.checked && checkbox2.checked) {
                nextButton.classList.remove('disabled');
                nextButton.setAttribute('href',
                    '/customer-registration');
            } else {
                nextButton.classList.add('disabled');
                nextButton.removeAttribute('href');
            }
        }
    </script>
@endpush
