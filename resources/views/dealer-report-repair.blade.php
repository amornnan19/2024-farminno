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

        .dealer-report-repair .logo-box {
            width: 160px;
            height: auto;
            margin-bottom: 30px;
        }

        .dealer-report-repair form {
            /* min-height: 350px */
        }

        .dealer-report-repair .nav-tabs .nav-item.show .nav-link,
        .dealer-report-repair .nav-tabs .nav-link.active {
            background-color: #CB8A12;
            border: none;
            color: #F5F5F5 !important;
        }

        .dealer-report-repair .nav-tabs .nav-link {
            border: none;
            background-color: #D79928;
            color: #F5F5F5;
        }

        .dealer-report-repair .document-tab {
            font-size: 14px;
            font-weight: 700;
            line-height: 24px;
            color: #0F1922;
        }

        .dealer-report-repair .document-tab a {
            color: #0F1922;
        }

        .dz-error-message {
            display: none !important;
        }

        .dropzone {
            text-align: center;
        }

        .dropzone.dz-clickable {
            border: 2px dashed #707070;
        }

        .marker {
            list-style-type: none;
            text-indent: -30px;
            font-size: 14px;
            font-weight: 700;
            line-height: 25px;
        }

        .marker:before {
            content: attr(data-marker) ". ";
        }
    </style>
@endpush

@section('content')
    <div class="main-content-header text-center">
        <p class="title mb-0">แจ้งซ่อม</p>
        <p class="sub-title"></p>
    </div>
    <div class="container dealer-report-repair">
        <div class="d-block">

            <div>
                <p class="form-title mb-0">ข้อมูลเกี่ยวกับผลิตภัณฑ์</p>
                <hr class="yellow-line">
            </div>

            <div class="form-group">
                <label for="">ยี่ห้อผลิตภัณฑ์ (Product brand)</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby=""
                    value="T40 Intelligent battery">
            </div>

            <div class="form-group">
                <label for="">รุ่นผลิตภัณฑ์ (Model Product)</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby=""
                    value="T40">
            </div>

            <div class="form-group">
                <label for="">เลขลงทะเบียน (Reg No.)</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby=""
                    value="57ghikkjgghji9">
            </div>

            <div>
                <p class="form-title mb-0">เจ้าของผลิตภัณฑ์</p>
                <hr class="yellow-line">
            </div>

            <div class="form-group">
                <label for="">ชื่อ - นามสกุล</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby=""
                    value="สทนพน  สุดสวาดขาดใจ">
            </div>

            <div class="form-group">
                <label for="">เบอร์โทรศัพท์</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby=""
                    value="0855567789">
            </div>

            <div class="form-group">
                <label for="">วันสิ้นสุดการรับประกัน</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby=""
                    value="29/02/2567">
            </div>

            <div class="form-group">
                <label for="">ร้านค้า</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby=""
                    value="sniper การบิน">
            </div>

            <div>
                <p class="form-title mb-0">ข้อมูลการซ่อมผลิตภัณฑ์</p>
                <hr class="yellow-line">
            </div>

            <div class="form-group">
                <label for="">สาเหตุการซ่อม</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby=""
                    value="สทนพน  สุดสวาดขาดใจ">
            </div>

            <h4 class="mb-0">แนบรูปก่อนซ่อม</h4>
            <div class="container mt-3 mb-3">
                <div>
                    <form action="/file-upload" class="dropzone p-2" id="dropzone1"></form>
                </div>
            </div>

            <div class="form-group">
                <label for="">ลิ้งค์วิดีโอ</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby=""
                    value="bzgngnmxhmmhnxthstjx">
            </div>

            <h4 class="mb-0">ข้อมูล Flight logs</h4>
            <div class="container mt-3 mb-3">
                <div>
                    <form action="/file-upload" class="dropzone p-2" id="dropzone2"></form>
                </div>
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
                        Out Waranty
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-1">
                    <div class="round">
                        <input type="checkbox" id="checkbox2" onclick="checkCheckboxes()" />
                        <label for="checkbox2"></label>
                    </div>
                </div>
                <div class="col-11">
                    <p class="form-text">
                        In Waranty/ Accidental Insurrance
                    </p>
                </div>
            </div>


            <div class="d-flex justify-content-center mt-3">
                <a href="/dealer-flight-logs" class="btn primary-btn">ยืนยันการแจ้งซ่อม</a>
            </div>

        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        $(document).ready(function() {
            $('#warrantyModal').on('hidden.bs.modal', function() {
                $('#successModal').modal('show');
            });

            $('#successModal').on('hidden.bs.modal', function() {
                $('#errorModal').modal('show');
            });

            $('#errorModal').on('hidden.bs.modal', function() {
                $('#successRegisModal').modal('show');
            });

            $('#successRegisModal').on('hidden.bs.modal', function() {
                $('#ratingModal').modal('show');
            });

            $('#ratingModal').on('hidden.bs.modal', function() {
                window.location.href = '/my-account';

            });


        });
    </script>
    <script>
        function success_modal() {
            $(function() {
                $('#warrantyModal').modal('show');
            });
        }
    </script>
    <script>
        Dropzone.autoDiscover = false;

        var options1 = {
            url: "/file-upload",
            maxFiles: 1,
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            dictDefaultMessage: "<i class='fa-solid fa-plus'></i><br/>เลือกเอกสาร",
            init: function() {
                this.on("success", function(file, response) {
                    console.log("File uploaded successfully!");
                    file.serverFileName = response.fileName;
                });
                this.on("error", function(file, errorMessage) {
                    console.log("File upload error:", errorMessage);
                });
                this.on("removedfile", function(file) {
                    if (file.serverFileName) {
                        fetch('/file-delete', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                },
                                body: JSON.stringify({
                                    fileName: file.serverFileName
                                }),
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log('File deleted:', data);
                            })
                            .catch(error => {
                                console.error('Error deleting file:', error);
                            });
                    }
                });
            }
        };

        var dropzone1 = new Dropzone("#dropzone1", options1);
        var dropzone2 = new Dropzone("#dropzone2", options1);
        var dropzone3 = new Dropzone("#dropzone3", options1);
    </script>
@endpush
