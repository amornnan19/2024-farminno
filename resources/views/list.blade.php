@extends('layouts.app')

@push('custom-css')
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
        </ul>
    </div>
@endsection

@push('custom-script')
@endpush
