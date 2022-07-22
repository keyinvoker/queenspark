@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="product-name">{{ $selected->name }}</h3>
        </div>

        <div class="card card-content">
            <center><img class="product-image " src="{{ asset('storage/'.$selected->image) }}" alt="{{ $selected->name }}"></center>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">

                    📄 <b>Description:</b>
                    <br>
                    {{ $selected->description }}

                </li>

                <li class="list-group-item">

                    🦎 <b>Quantity:</b> {{ $selected->quantity }}

                </li>

                <li class="list-group-item">

                    💸 <b>Price:</b> Rp. {{ number_format($selected->price, 0, '.', ',') }}

                </li>

                <li class="list-group-item">

                    ⭐ <b>Rating:</b> {{ $selected->rating }}

                </li>
            </ul>
        </div>

    </div>
</div>
@endsection