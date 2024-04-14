@extends('layouts/page')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-list__item breadcrumb-list__item--active">Danh mục</li>
                </ul>
            </div>
        </div>
    </div>

@endsection