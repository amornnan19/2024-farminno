<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            {{-- <div class="modal-header">

            </div> --}}
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img src="" class="img-fluid w-100" id="modalImage" alt="Modal Image">
            </div>
        </div>
    </div>
</div>



<div class="alert-modal modal fade" id="warrantyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card">
                    {{-- <div class="card-header">
                        Card Header
                    </div> --}}
                    <div class="card-body">
                        <div class="d-block mx-auto m-3">
                            <img src="{{ asset('img/product.png') }}" class="modal-img" alt="">
                        </div>
                        <p class="card-title">การประกันงานซ่อม</p>
                        <p class="card-text text-center">
                            ประกันหลังการซ่อมเริ่มนับจากวันที่ส่งมอบงาน
                            ภายใน 7 วัน หรือ ชั่วโมงบินไม่เกิน 500 ชม
                            <br> (ข้อใดข้อนึงถึงก่อน)
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center m-3">
                            <a href="javascript:void(0)" data-dismiss="modal" class="btn primary-btn">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="alert-modal modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-block mx-auto m-3">
                            <img src="{{ asset('icon/success.png') }}" class="modal-img" alt="">
                        </div>
                        <p class="card-title">บันทึกข้อมูลสำเร็จ</p>
                        <p class="card-text text-center">
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center m-3">
                            <a href="javascript:void(0)" data-dismiss="modal" class="btn primary-btn">ตกลง</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="alert-modal modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-block mx-auto m-3">
                            <img src="{{ asset('icon/error.png') }}" class="modal-img" alt="">
                        </div>
                        <p class="card-title text-error">ขออภัย</p>
                        <p class="card-text text-center">
                            ไม่พบข้อมูลของคุณในระบบ <br>
                            กรุณาติดต่อตัวแทนจำหน่าย
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center m-3">
                            <a href="javascript:void(0)" data-dismiss="modal" class="btn primary-btn">ตกลง</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="alert-modal modal fade" id="successRegisModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-block mx-auto m-3">
                            <img src="{{ asset('icon/success.png') }}" class="modal-img" alt="">
                        </div>
                        <p class="card-title">ลงทะเบียนสำเร็จ</p>
                        <p class="card-text text-center">
                            กรุณาตรวจสอบข้อมูลของคุณ
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center m-3">
                            <a href="javascript:void(0)" data-dismiss="modal" class="btn primary-btn">ตกลง</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="alert-modal modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card">
                    <div class="card-body mt-5">
                        <div class="d-block mx-auto m-3">
                            <div class="row">
                                <div class="col">
                                    <div class="star-box">
                                        <svg onclick="starFunction(1)" id="myStar1" width="100%" height="100%"
                                            viewBox="0 0 41 39" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="star">
                                            <path
                                                d="M40.9684 15.6167C41.1732 14.5948 40.3539 13.3685 39.3297 13.3685L27.6537 11.7335L22.3278 1.10561C22.1229 0.696849 21.9181 0.492466 21.5084 0.288084C20.4842 -0.325061 19.2551 0.0837021 18.6406 1.10561L13.5196 11.7335L1.84358 13.3685C1.22905 13.3685 0.819368 13.5729 0.614527 13.9817C-0.204842 14.7992 -0.204842 16.0255 0.614527 16.843L9.01305 25.0183L6.96463 36.6681C6.96463 37.0769 6.96463 37.4856 7.16947 37.8944C7.78399 38.9163 9.01305 39.3251 10.0373 38.7119L20.4842 33.1936L30.9311 38.7119C31.136 38.9163 31.5457 38.9163 31.9554 38.9163C32.1602 38.9163 32.1602 38.9163 32.365 38.9163C33.3893 38.7119 34.2086 37.69 34.0038 36.4637L31.9554 24.8139L40.3539 16.6386C40.7636 16.4343 40.9684 16.0255 40.9684 15.6167Z"
                                                class="star-path"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="star-box">
                                        <svg onclick="starFunction(2)" id="myStar2" width="100%" height="100%"
                                            viewBox="0 0 41 39" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="star">
                                            <path
                                                d="M40.9684 15.6167C41.1732 14.5948 40.3539 13.3685 39.3297 13.3685L27.6537 11.7335L22.3278 1.10561C22.1229 0.696849 21.9181 0.492466 21.5084 0.288084C20.4842 -0.325061 19.2551 0.0837021 18.6406 1.10561L13.5196 11.7335L1.84358 13.3685C1.22905 13.3685 0.819368 13.5729 0.614527 13.9817C-0.204842 14.7992 -0.204842 16.0255 0.614527 16.843L9.01305 25.0183L6.96463 36.6681C6.96463 37.0769 6.96463 37.4856 7.16947 37.8944C7.78399 38.9163 9.01305 39.3251 10.0373 38.7119L20.4842 33.1936L30.9311 38.7119C31.136 38.9163 31.5457 38.9163 31.9554 38.9163C32.1602 38.9163 32.1602 38.9163 32.365 38.9163C33.3893 38.7119 34.2086 37.69 34.0038 36.4637L31.9554 24.8139L40.3539 16.6386C40.7636 16.4343 40.9684 16.0255 40.9684 15.6167Z"
                                                class="star-path"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="star-box">
                                        <svg onclick="starFunction(3)" id="myStar3" width="100%" height="100%"
                                            viewBox="0 0 41 39" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="star">
                                            <path
                                                d="M40.9684 15.6167C41.1732 14.5948 40.3539 13.3685 39.3297 13.3685L27.6537 11.7335L22.3278 1.10561C22.1229 0.696849 21.9181 0.492466 21.5084 0.288084C20.4842 -0.325061 19.2551 0.0837021 18.6406 1.10561L13.5196 11.7335L1.84358 13.3685C1.22905 13.3685 0.819368 13.5729 0.614527 13.9817C-0.204842 14.7992 -0.204842 16.0255 0.614527 16.843L9.01305 25.0183L6.96463 36.6681C6.96463 37.0769 6.96463 37.4856 7.16947 37.8944C7.78399 38.9163 9.01305 39.3251 10.0373 38.7119L20.4842 33.1936L30.9311 38.7119C31.136 38.9163 31.5457 38.9163 31.9554 38.9163C32.1602 38.9163 32.1602 38.9163 32.365 38.9163C33.3893 38.7119 34.2086 37.69 34.0038 36.4637L31.9554 24.8139L40.3539 16.6386C40.7636 16.4343 40.9684 16.0255 40.9684 15.6167Z"
                                                class="star-path"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="star-box">
                                        <svg onclick="starFunction(4)" id="myStar4" width="100%" height="100%"
                                            viewBox="0 0 41 39" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="star">
                                            <path
                                                d="M40.9684 15.6167C41.1732 14.5948 40.3539 13.3685 39.3297 13.3685L27.6537 11.7335L22.3278 1.10561C22.1229 0.696849 21.9181 0.492466 21.5084 0.288084C20.4842 -0.325061 19.2551 0.0837021 18.6406 1.10561L13.5196 11.7335L1.84358 13.3685C1.22905 13.3685 0.819368 13.5729 0.614527 13.9817C-0.204842 14.7992 -0.204842 16.0255 0.614527 16.843L9.01305 25.0183L6.96463 36.6681C6.96463 37.0769 6.96463 37.4856 7.16947 37.8944C7.78399 38.9163 9.01305 39.3251 10.0373 38.7119L20.4842 33.1936L30.9311 38.7119C31.136 38.9163 31.5457 38.9163 31.9554 38.9163C32.1602 38.9163 32.1602 38.9163 32.365 38.9163C33.3893 38.7119 34.2086 37.69 34.0038 36.4637L31.9554 24.8139L40.3539 16.6386C40.7636 16.4343 40.9684 16.0255 40.9684 15.6167Z"
                                                class="star-path"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="star-box">
                                        <svg onclick="starFunction(5)" id="myStar5" width="100%" height="100%"
                                            viewBox="0 0 41 39" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="star">
                                            <path
                                                d="M40.9684 15.6167C41.1732 14.5948 40.3539 13.3685 39.3297 13.3685L27.6537 11.7335L22.3278 1.10561C22.1229 0.696849 21.9181 0.492466 21.5084 0.288084C20.4842 -0.325061 19.2551 0.0837021 18.6406 1.10561L13.5196 11.7335L1.84358 13.3685C1.22905 13.3685 0.819368 13.5729 0.614527 13.9817C-0.204842 14.7992 -0.204842 16.0255 0.614527 16.843L9.01305 25.0183L6.96463 36.6681C6.96463 37.0769 6.96463 37.4856 7.16947 37.8944C7.78399 38.9163 9.01305 39.3251 10.0373 38.7119L20.4842 33.1936L30.9311 38.7119C31.136 38.9163 31.5457 38.9163 31.9554 38.9163C32.1602 38.9163 32.1602 38.9163 32.365 38.9163C33.3893 38.7119 34.2086 37.69 34.0038 36.4637L31.9554 24.8139L40.3539 16.6386C40.7636 16.4343 40.9684 16.0255 40.9684 15.6167Z"
                                                class="star-path"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <p class="card-title">กรุณาให้คะแนน <br> ความพึงพอใจ</p>
                        {{-- <p class="card-text text-center">
                            กรุณาตรวจสอบข้อมูลของคุณ
                        </p> --}}
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center m-3">
                            <a href="javascript:void(0)" data-dismiss="modal" class="btn primary-btn">ตกลง</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function starFunction(star) {
        $(function() {
            if (star === 1 && $('#myStar1').hasClass('active')) {
                $(".star").removeClass("active");
            } else {
                for (let i = 1; i <= 5; i++) {
                    if (i <= star) {
                        $(`#myStar${i}`).addClass('active');
                    } else {
                        $(`#myStar${i}`).removeClass('active');
                    }
                }
            }
        });
    }
</script>
