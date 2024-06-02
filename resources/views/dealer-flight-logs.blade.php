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

        /* .card {
                            max-height: 400px;
                            overflow-y: auto;
                        } */
    </style>
@endpush

@section('content')
    <div class="main-content-header text-center">
        <p class="title mb-0">ข้อมูล Flight logs</p>
        <p class="sub-title"></p>
    </div>
    <div class="container dealer-report-repair">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card drop-shadow">
                        <div class="card-body">
                            {{-- <h5 class="card-title">Scrollable Content</h5> --}}
                            <div class="card-text">
                                <p>วันที่และเวลาของเที่ยวบิน: บันทึกวันที่และเวลาที่เที่ยวบินเริ่มต้นและสิ้นสุด</p>

                                <p>พิกัด GPS: บันทึกตำแหน่งของโดรนในแต่ละช่วงเวลาของเที่ยวบิน</p>

                                <p>ความสูงและความเร็ว: ข้อมูลเกี่ยวกับความสูงและความเร็วของโดรนในระหว่างเที่ยวบิน</p>

                                <p>สถานะของแบตเตอรี่: รวมถึงระดับแบตเตอรี่เริ่มต้น, การใช้พลังงาน,
                                    และระดับแบตเตอรี่ที่เหลือเมื่อเที่ยวบินสิ้นสุด</p>

                                <p>ข้อมูลควบคุมการบิน: รวมถึงการเคลื่อนไหวของสติ๊กควบคุมและคำสั่งที่ใช้</p>

                                <p>ข้อมูลเซ็นเซอร์: อาจรวมถึงข้อมูลจากเซ็นเซอร์ต่างๆ เช่น IMU, GPS, และอื่นๆ</p>

                                <p>ข้อผิดพลาดและคำเตือน: บันทึกข้อผิดพลาดหรือคำเตือนที่เกิดขึ้นในระหว่างเที่ยวบิน</p>

                                <p>รูปแบบการบิน: รวมถึงข้อมูลเกี่ยวกับโหมดการบินที่ใช้ (เช่น GPS, ATTI)</p>

                                <p>การบันทึกภาพและวิดีโอ: ข้อมูลเกี่ยวกับเวลาและตำแหน่งที่ถ่ายภาพหรือบันทึกวิดีโอ</p>

                                <p>ข้อมูล Home Point: ตำแหน่งที่ตั้งของจุด Home Point
                                    ที่โดรนจะกลับไปในกรณีของการสูญเสียสัญญาณหรือปัญหาอื่นๆ</p>

                            </div>
                        </div>
                    </div>
                </div>
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
