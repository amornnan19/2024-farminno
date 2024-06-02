@extends('layouts.app')

@push('custom-css')
    <style>
        body {
            padding-top: 0;
        }

        nav#top-nav-bar {
            display: none !important;
        }

        .container {
            position: relative;
        }

        .icon {
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .button {
            position: absolute;
            top: 0;
            right: 25px;
            padding: 0;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }


        .container h4 {
            font-size: 20px;
            font-weight: 700;
            line-height: 30.22px;

        }

        .container .notification-box-read {
            background: #DDDDDD;
        }

        .container .notification-box-read .text {
            font-size: 16px;
            font-weight: 400;
            line-height: 20px;
        }

        .container .notification-box-read .date {
            font-size: 16px;
            font-weight: 400;
            line-height: 20px;
            color: #293D93;
        }

        .container .notification-box-unread .text {
            font-size: 16px;
            font-weight: 600;
            line-height: 20px;
        }

        .container .notification-box-unread .date {
            font-size: 16px;
            font-weight: 800;
            line-height: 20px;
            color: #293D93;
        }

        a {
            color: unset;
        }
    </style>
@endpush

@section('content')
    <div class="main-content-header text-center">
        <p class="title mb-0">การแจ้งเตือน</p>
        <p class="sub-title">(Notification)</p>
    </div>
    <div class="container notification-box p-0">
        <div class="container notification-box-unread">
            <div style="padding: 10px 20px 10px 50px;">
                <a href="/notification-detail">
                    <div class="icon">
                        <img src="{{ asset('icon/bee.png') }}" alt="" width="50" height="50">
                    </div>
                    <h4>KI</h4>
                    <p class="m-0 text">แจ้งการอัพเดทข้อมูล Flight logs หมายเลข f55673efggg</p>
                    <p class="mt-2 m-0 date">21 มีนาคม 2557 เวลา 05:37 น.</p>
                </a>
                <span class="button"><i class="fa-solid fa-ellipsis"></i></span>
            </div>
            <hr>
        </div>
        <div class="container notification-box-read">
            <div style="padding: 10px 20px 10px 50px;">
                <a href="/notification-detail">
                    <div class="icon">
                        <img src="{{ asset('icon/bee.png') }}" alt="" width="50" height="50">
                    </div>
                    <h4>KI</h4>
                    <p class="m-0 text">แจ้งการอัพเดทข้อมูล Flight logs หมายเลข f55673efggg</p>
                    <p class="mt-2 m-0 date">21 มีนาคม 2557 เวลา 05:37 น.</p>
                </a>
                <span class="button"><i class="fa-solid fa-ellipsis"></i></span>
            </div>
            <hr>
        </div>
        <div class="container notification-box-unread">
            <div style="padding: 10px 20px 10px 50px;">
                <a href="/notification-detail">
                    <div class="icon">
                        <img src="{{ asset('icon/bee.png') }}" alt="" width="50" height="50">
                    </div>
                    <h4>KI</h4>
                    <p class="m-0 text">แจ้งการอัพเดทข้อมูล Flight logs หมายเลข f55673efggg</p>
                    <p class="mt-2 m-0 date">21 มีนาคม 2557 เวลา 05:37 น.</p>
                </a>
                <span class="button"><i class="fa-solid fa-ellipsis"></i></span>
            </div>
            <hr>
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
