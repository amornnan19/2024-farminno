@extends('layouts.app')

@push('custom-css')
    <style>
        .register-content .logo {
            width: 100%;
            max-width: 208px;
        }

        .primary-btn-box {
            top: 0;
        }

        .register-content form {
            min-height: 350px
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

        <div>
            <img class="logo d-block mx-auto" src="{{ asset('img/main-logo.png') }}" alt="Logo">
        </div>

        <div class="mt-5">
            <p class="title">กรุณากรอกเบอร์โทรศัพท์ของคุณ <br> เพื่อดำเนินการต่อ</p>
        </div>

        <div id="phone_form">
            <form class="d-flex flex-column justify-content-between">
                <div>
                    <div class="form-group">
                        <label for="phone_number">กรุณากรอกหมายเลขโทรศัพท์</label>
                        <input type="text" class="form-control" id="phone_number" aria-describedby="" placeholder="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn primary-btn">ถัดไป</button>
                </div>
            </form>
        </div>

    </div>
@endsection

@push('custom-script')
@endpush
