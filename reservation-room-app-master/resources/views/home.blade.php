@extends('Layouts.app')
@section('title', 'Home')
@section('content')
<div class="background col-12" style="min-height: 300px; position: absolute; z-index: -1;"></div>
<div class="container d-flex items-center" style="min-height: 300px;">
    <div class="m-auto text-center text-white">
        <h4>Order the room now!</h4>
        <a href="{{ Auth::check() ? '#orders' : route('login') }}" class="btn btn-primary">Order Room</a>
    </div>
</div>
<div class="container my-2">
    <article class="my-3">
        <h2 class="text-center">Sunset Ludge</h2>
        <p>
            Welcome to Hotel Sunset Lodge, where luxury meets tranquility. Nestled in the heart of breathtaking landscapes, our hotel is the epitome of comfort and sophistication. Whether you're seeking a relaxing getaway, a business retreat, or a romantic escape, our dedicated team is committed to ensuring a memorable experience for every guest.
        </p>
        <p>
            Conveniently located [mention location details], Hotel Sunset Lodge provides easy access to nearby attractions, making it an ideal choice for both leisure and business travelers.
        </p>
    </article>
    <div class="row container my-2">
        <x-medium-cards>
            <x-slot name="img">
                {{ asset('img/vipbed_1_1280x853.jpg') }}
            </x-slot>
            <x-slot name="alt">
                Best Bed
            </x-slot>
            <x-slot name="title">
                Description
            </x-slot>
            <x-slot name="desc">
                It's a luxurious room for relaxation with lots of facilities like Morning Refreshment, Lunch, Evening Snacks & Dinner.
            </x-slot>
        </x-medium-cards>

        <x-medium-cards>
            <x-slot name="img">
                {{ asset('img/vipbed_2_1280x853.jpg') }}
            </x-slot>
            <x-slot name="alt">
                Best Room
            </x-slot>
            <x-slot name="title">
                Description
            </x-slot>
            <x-slot name="desc">
                It's a luxurious room for relaxation with lots of facilities like Morning Refreshment, Lunch, Evening Snacks & Dinner.
            </x-slot>
        </x-medium-cards>

        <x-medium-cards>
            <x-slot name="img">
                {{ asset('img/vipbed_3_1280x853.jpg') }}
            </x-slot>
            <x-slot name="alt">
                Best Bed
            </x-slot>
            <x-slot name="title">
                Description
            </x-slot>
            <x-slot name="desc">
                It's a luxurious room for relaxation with lots of facilities like Morning Refreshment, Lunch, Evening Snacks & Dinner.
            </x-slot>
        </x-medium-cards>

        <x-medium-cards>
            <x-slot name="img">
                {{ asset('img/vipbed_4_1280x853.jpg') }}
            </x-slot>
            <x-slot name="alt">
                Best Bed
            </x-slot>
            <x-slot name="title">
                Description
            </x-slot>
            <x-slot name="desc">
                It's a luxurious room for relaxation with lots of facilities like Morning Refreshment, Lunch, Evening Snacks & Dinner.
            </x-slot>
        </x-medium-cards>
    </div>
    @if (Auth::check())
    <div id="orders" class="col-md-8 m-auto my-3">
        @livewire('orders-form')
    </div>
    @endif
    <div class="row container my-3">
        <div class="col-sm-4 p-2 text-center">
            <span class="fa fa-globe" style="font-size: 4rem"></span>
            <p>International</p>
        </div>
        <div class="col-sm-4 p-2 text-center">
            <div class="">
                <span class="fa fa-star" style="font-size: 4rem"></span>
                <span class="fa fa-star" style="font-size: 4rem"></span>
                <span class="fa fa-star" style="font-size: 4rem"></span>
                <span class="fa fa-star" style="font-size: 4rem"></span>
            </div>
            <p>5 Star Hotel</p>
        </div>
        <div class="col-sm-4 p-2 text-center">
            <span class="fab fa-paypal" style="font-size: 4rem"></span>
            <p>Accept Paypal</p>
        </div>
    </div>
    <article class="my-3">
        <p>
            Welcome to Hotel Sunset Lodge, where luxury meets tranquility. Nestled in the heart of breathtaking landscapes, our hotel is the epitome of comfort and sophistication. Whether you're seeking a relaxing getaway, a business retreat, or a romantic escape, our dedicated team is committed to ensuring a memorable experience for every guest.

            Conveniently located [mention location details], Hotel Sunset Lodge provides easy access to nearby attractions, making it an ideal choice for both leisure and business travelers.
        </p>
    </article>
</div>
@endsection