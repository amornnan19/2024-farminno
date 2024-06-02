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

        .drone-registration-content .logo-box {
            width: 160px;
            height: auto;
            margin-bottom: 30px;
        }

        .drone-registration-content form {
            /* min-height: 350px */
        }

        .drone-registration-content .nav-tabs .nav-item.show .nav-link,
        .drone-registration-content .nav-tabs .nav-link.active {
            background-color: #CB8A12;
            border: none;
            color: #F5F5F5 !important;
        }

        .drone-registration-content .nav-tabs .nav-link {
            border: none;
            background-color: #D79928;
            color: #F5F5F5;
        }

        .drone-registration-content .document-tab {
            font-size: 14px;
            font-weight: 700;
            line-height: 24px;
            color: #0F1922;
        }

        .drone-registration-content .document-tab a {
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
        <p class="title mb-0">การขึ้นทะเบียนโดรน</p>
        <p class="sub-title">(Drone Registration)</p>
    </div>
    <div class="container drone-registration-content">
        <div class="d-block">

            <div class="logo-box d-block mx-auto">
                <img src="{{ asset('img/product.png') }}" alt="">
            </div>
            <h4>ส่วนที่ 1 <br>เอกสารประกอบตามประเภทการลงทะเบียน</h4>
            <div class="document-tab">
                <div class="mt-3">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs justify-content-center w-100" id="myTab" role="tablist">
                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true"
                                style="border-radius: 10px 0px 0px 0px;">บุคคลธรรมดา</a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false"
                                style="border-radius:0px 10px 0px 0px;">นิติบุคคล</a>
                        </li>
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show p-3 active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <p class="m-0">
                                <i class="fa-regular fa-file-lines"></i>
                                <a href="" class="ml-2">ดาวน์โหลด - เอกสาร คท. 26</a>
                            </p>
                            <p class="m-0">
                                <i class="fa-regular fa-file-lines"></i>
                                <a href="" class="ml-2">ดาวน์โหลด - เอกสาร คท. 30</a>
                            </p>
                            <p class="m-0">
                                <i class="fa-regular fa-file-lines"></i>
                                <a href="" class="ml-2">ดาวน์โหลด - หนังสือรับรอง</a>
                            </p>
                            <p class="m-0">
                                <i class="fa-regular fa-file-lines"></i>
                                <a href="" class="ml-2">ดาวน์โหลด - แบบพิมพ์ข้อมูลส่วนบุคคล</a>
                            </p>
                            <p class="m-0">
                                <i class="fa-regular fa-file-lines"></i>
                                <a href="" class="ml-2">ดาวน์โหลด - คำขอขึ้นทะเบียนผู้บังคับโดรน</a>
                            </p>

                        </div>
                        <div class="tab-pane fade show p-3" id="profile" role="tabpanel" aria-labelledby="home-tab">

                            <p class="m-0">
                                <i class="fa-regular fa-file-lines"></i>
                                <a href="" class="ml-2">ดาวน์โหลด - แบบพิมพ์ข้อมูลส่วนบุคคล</a>
                            </p>
                            <p class="m-0">
                                <i class="fa-regular fa-file-lines"></i>
                                <a href="" class="ml-2">ดาวน์โหลด - คำขอขึ้นทะเบียนผู้บังคับโดรน</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">ส่งเอกสารทั้งหมดไปยังอีเมล</h4>
            <label for="" class="m-0">อีเมล (E-Mail)*</label>
            <div class="row">
                <div class="col-9 pr-1">
                    <div class="form-group">

                        <input type="text" name="" id="" class="form-control" placeholder=""
                            aria-describedby="">
                    </div>
                </div>
                <div class="col-3 pl-1">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn primary-btn">ตกลง</a>
                    </div>
                </div>
            </div>
            <p class="form-text f14px mt-0">
                หมายเหตุ: ท่านจะยังสามารถอัพโหลดเอกสารในภายหลังได้ผ่านเมนู ผลิตภัณฑ์
            </p>
            <hr>

            <h4 class="mb-0">ส่วนที่ 2 ภาพถ่ายโดรนประกอบการขึ้นทะเบียน</h4>
            <ul>
                <li class="marker" data-marker="2.1">
                    ภาพถ่ายตัวโดรนจำนวน 1 ภาพ พร้อมเซ็นต์สำเนา ถูกต้อง
                </li>
                <li class="marker" data-marker="2.2">ภาพถ่ายด้านหลังรีโมท 1 ภาพ พร้อมเซ็นต์สำเนา ถูกต้อง</li>
                <li class="marker" data-marker="2.3">ภาพถ่าย Serial Number ของโดรน 1 ภาพ พร้อม เซ็นต์สำเนาถูกต้อง</li>
            </ul>

            <h4 class="mb-0 primary-color">ตัวอย่างการภาพถ่ายโดรน</h4>
            <div class="container">
                <img src="{{ asset('img/drone-ex.png') }}" alt="" class="w-100">
            </div>
            <hr>

            <h4 class="mb-0">ส่วนที่ 3 เอกสารประกอบการยืนยันตัวตน</h4>
            <ul>
                <li class="marker" data-marker="3.1">
                    สำเนาบัตรประชาชน 3 ใบ พร้อมเซ็นต์สำเนาถูกต้อง
                </li>
                <li class="marker" data-marker="3.2">
                    สำเนาทะเบียนบ้าน 3 ใบ พร้อมเซ็นต์สำเนาถูกต้อง
                </li>
            </ul>

            <div>
                <p class="form-title mb-0">ข้อมูลผู้ครอบครอง (Customer)</p>
                <hr class="yellow-line">
            </div>

            <h4 class="mb-0">ส่วนที่ 1 เอกสารประกอบตามประเภทการลงทะเบียน</h4>
            <div class="container mt-3 mb-3">
                <div>
                    <form action="/file-upload" class="dropzone p-2" id="dropzone1"></form>
                </div>
            </div>

            <h4 class="mb-0">ส่วนที่ 2 ภาพถ่ายโดรนประกอบการขึ้นทะเบียน</h4>
            <div class="container mt-3 mb-3">
                <div>
                    <form action="/file-upload" class="dropzone p-2" id="dropzone2"></form>
                </div>
            </div>

            <h4 class="mb-0">ส่วนที่ 3 เอกสารประกอบการยืนยันตัวตน</h4>
            <div class="container mt-3 mb-3">
                <div>
                    <form action="/file-upload" class="dropzone p-2" id="dropzone3"></form>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <a href="javascript:void(0)" onclick="success_modal()" class="btn primary-btn">บันทึก</a>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <a href="javascript:void(0)" onclick="success_modal()"
                    class="btn secondary-btn">ส่งเอกสารการขึ้นทะเบียนการบินฯ</a>
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
