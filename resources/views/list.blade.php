@extends('layouts.app')

@push('custom-css')
    <style>
        footer#footer {
            display: none !important;
        }

        nav#top-nav-bar {
            display: none !important;
        }
    </style>
@endpush

@section('content')
    <div class="container mt-3">
        <h2>USER</h2>

        <ul>
            <li><a href="/login">login</a></li>
            <li><a href="/register">register</a></li>
            <li><a href="/customer-registration">customer-registration</a></li>
            <li><a href="/home">home</a></li>
            <li><a href="/service-status">service-status</a></li>
            <li><a href="/service-status-detail">service-status-detail</a></li>
            <li><a href="/product">product</a></li>
            <li><a href="/product-detail">product-detail</a></li>
            <li><a href="/drone-registration">drone-registration</a></li>
            <li><a href="/my-account">my-account</a></li>
        </ul>

        <hr>

        <h2>DEALER</h2>

        <ul>
            <li><a href="/register?role=dealer">register</a></li>
            <li><a href="/dealer-registration">dealer-registration</a></li>
            <li><a href="/dealer-home">dealer-registration</a></li>
            <li><a href="/dealer-home">dealer-home</a></li>
            <li><a href="/dealer-product-detail">dealer-product-detail</a></li>
            <li><a href="/dealer-service-status-detail">dealer-service-status-detail</a></li>
            <li><a href="/dealer-report-repair">dealer-report-repair</a></li>
            <li><a href="/dealer-flight-logs">dealer-flight-logs</a></li>
            <li><a href="/dealer-service-status">dealer-service-status</a></li>
            <li><a href="/dealer-service-product-detail">dealer-service-product-detail</a></li>
            <li><a href="/dealer-my-account">dealer-my-account</a></li>
        </ul>

        <hr>
        
        <h2>OTHER</h2>
        <li><a href="/notification">notification</a></li>
        <li><a href="/notification-detail">notification-detail</a></li>
        <li><a href="/pdpa">pdpa</a></li>
    </div>
@endsection

@push('custom-script')
@endpush
