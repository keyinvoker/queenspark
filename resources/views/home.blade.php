@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/cards.css') }}">

@section('content')

<h3 class="home-title">Our Reptile Collection</h3>

<div class="card-container">

    @forelse($animals as $x)
    <div class="card">
        <img src="{{ asset('storage/'.$x->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $x->name }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                💸 <b>Price:</b> Rp. {{ number_format($x->price, 0, ',-', '.') }},-
            </li>
            <li class="list-group-item">
                🦎 <b>Quantity:</b> {{ $x->quantity }}
            </li>
            <li class="list-group-item">
                ⭐ <b>Rating:</b> {{ $x->rating }}
            </li>
            <center>
                <li class="list-group-item"><a href="{{ route('product.detail', $x->id) }}">Read more...</a></li>
            </center>
        </ul>
    </div>
    @empty
    <div class="card">No product.</div>
    @endforelse

</div>
@endsection