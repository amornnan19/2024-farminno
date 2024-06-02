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

        .card {
            min-height: 400px;
            max-height: 400px;
            background: #F8F8F8;
            overflow-y: auto;

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

        <div class="mt-3 mb-3">
            <p class="title main-btn-color">ประกาศเกี่ยวกับการคุ้มครองข้อมูลส่วนบุคคล</p>
        </div>

        <div class="mt-3 mb-3">
            <p class="title">กรุณากดที่ข้อความด้านล่างเพื่ออ่านรายละเอียด
                ยอมรับข้อกำหนดของเรา และดำเนินการ</p>
        </div>
        <div class="container dealer-report-repair p-0">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card drop-shadow">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Scrollable Content</h5> --}}
                                <div class="card-text">
                                    <p>บททั่วไป <br> <br>

                                        เพื่อเป็นการปฏิบัติตามพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562
                                        และกฎหมายลำดับรองที่เกี่ยวข้อง และให้หมายความรวมถึงกฎหมายฉบับแก้ไขใด ๆ ในอนาคต
                                        (“กฎหมายว่าด้วยการคุ้มครองข้อมูลส่วนบุคคล”) บริษัท ฟาร์มอินโน (ประเทศไทย) จำกัด
                                        (“บริษัทฯ”) จึงจัดทำประกาศเกี่ยวกับการคุ้มครองข้อมูลส่วนบุคคล (Privacy Notice)
                                        ของบริษัทฯ (“ประกาศฯ”) ฉบับนี้ขึ้น เพื่ออธิบายให้ท่านทราบถึงวิธีการที่บริษัทฯ
                                        ปฏิบัติต่อข้อมูลที่สามารถระบุตัวตนของท่าน หรืออาจจะระบุตัวตนของท่านได้
                                        ไม่ว่าทางตรงหรือทางอ้อม ตามกฎหมายว่าด้วยการคุ้มครองข้อมูลส่วนบุคคล
                                        (“ข้อมูลส่วนบุคคล”) เช่น วิธีการเก็บรวบรวม ใช้ เปิดเผย หรือ การดำเนินการใด ๆ
                                        กับข้อมูลส่วนบุคคลไม่ว่าด้วยวิธีการอัตโนมัติหรือไม่ก็ตาม อาทิ การบันทึก การจัดระบบ
                                        การจัดเก็บ การปรับเปลี่ยนหรือการดัดแปลง การเรียกคืน การส่ง การโอน
                                        การเผยแพร่หรือการทำให้สามารถเข้าถึงหรือพร้อมใช้งานโดยวิธีใด ๆ การจัดเรียง
                                        การนำมารวมกัน การจำกัดหรือการห้ามเข้าถึง การลบหรือการทำลาย (“ประมวลผล”)
                                        และเพื่อแจ้งให้ท่านทราบถึงวัตถุประสงค์ในการประมวลผล
                                        ระยะเวลาในการเก็บรักษาข้อมูลส่วนบุคคล ตลอดจนสิทธิของท่านในฐานะเจ้าของข้อมูลส่วนบุคคล
                                        ทั้งนี้ บริษัทฯ ขอแนะนำให้ท่านอ่านและทำความเข้าใจถึงข้อกำหนดต่าง ๆ ภายใต้ประกาศฯ
                                        ฉบับนี้ โดยมีรายละเอียดดังต่อไปนี้

                                        2. ประเภทของบุคคลที่บริษัทฯ ทำการเก็บรวบรวมข้อมูลส่วนบุคคล
                                        และแหล่งที่มาของข้อมูลส่วนบุคคล

                                        2.1 ภายใต้ประกาศฯ ฉบับนี้ ประเภทของบุคคลที่บริษัทฯ
                                        ทำการเก็บรวบรวมและประมวลผลข้อมูลส่วนบุคคลและแหล่งที่มาของข้อมูลส่วนบุคคลโดยสังเขปมีดังนี้
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href="javascript:history.back()" class="btn primary-btn">ย้อนกลับ</a>
        </div>
    </div>
@endsection

@push('custom-script')
    <script></script>
@endpush
