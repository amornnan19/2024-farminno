<footer id="footer" class="footer d-block d-sm-none">
    <div class="container">
        <div class="row">
            <div class="col-3 text-center">
                <a href="/home" class="{{ request()->path() == 'home' ? 'active' : '' }}">
                    <div class="svg-box">
                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="currentColor" />
                        </svg>
                    </div>

                    <div>หน้าแรก</div>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="/service-status"
                    class="{{ (request()->path() == 'service-status' ? 'active' : '' || request()->path() == 'service-status-detail') ? 'active' : '' }}">
                    <div class="svg-box">
                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.285 10.3l1.43-1.43c.782-.782.782-2.047 0-2.83l-2.83-2.83c-.783-.783-2.048-.783-2.83 0l-1.43 1.43a2.5 2.5 0 00-.637 2.645l-8.49 8.49a2.5 2.5 0 10.707.707l8.49-8.49a2.5 2.5 0 002.645-.637z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div>สถานะซ่อม</div>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="/product" class="{{ request()->path() == 'product' ? 'active' : '' }}">
                    <div class="svg-box">
                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2l-5.5 9h11L12 2zm0 2.75L14.75 9h-5.5L12 4.75zM6 11l5.5 9 5.5-9H6zm1.75 2h8.5L12 18.25 7.75 13z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div>ผลิตภัณฑ์</div>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="/my-account">
                    <div class="svg-box">
                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2a7 7 0 100 14 7 7 0 000-14zm0 2a5 5 0 110 10 5 5 0 010-10zm0 11c-3.35 0-9 1.68-9 5v2h18v-2c0-3.32-5.65-5-9-5zm0 2c2.87 0 6.44 1.42 6.93 3H5.07c.49-1.58 4.06-3 6.93-3z"
                                fill="currentColor" />
                        </svg>
                    </div>

                    <div>บัญชี</div>
                </a>
            </div>
        </div>
    </div>
</footer>
