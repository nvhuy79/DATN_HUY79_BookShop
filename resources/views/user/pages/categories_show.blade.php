@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $category->title }}</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">
                                @if($product->sale_price)
                                    <span class="text-muted text-decoration-line-through">{{ number_format($product->price, 0, ',', '.') }} ₫</span>
                                    <span class="text-danger">{{ number_format($product->sale_price, 0, ',', '.') }} ₫</span>
                                @else
                                    <span>{{ number_format($product->price, 0, ',', '.') }} ₫</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
