@extends('user/layouts/page')
@section('content')

<div class="breadcrumb-area pt-30 pb-30 mb-130">
    <div class="container">
        <div class="col-lg-12">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-list__item"><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="breadcrumb-list__item breadcrumb-list__item--active">Danh mục</li>
            </ul>
        </div>
    </div>
</div>

<h1>Đây là danh mục</h1>
@endsection