@extends('main')

@section('content')


    <div id="section1" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" >
        <div class="col-md-5 p-lg-5 mx-auto my-5" id="innersection1">
        <h1 class="display-4 fw-normal text-light">Pizza planet</h1>
        <p class="lead fw-normal text-light">Pizza is a dish of Italian origin consisting of a usually round, flat base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients (such as anchovies, mushrooms, onions, olives, vegetables, meat, ham, etc.)</p>
        <a class="btn btn-outline-secondary fw-bold text-light" href="{{route('menu')}}">Looking for a tasty pizza?</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Contact us</h2>
            <p class="lead">(212)456-7890</p>
        </div>
        </div>
        <div class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10902.080765401073!2d19.6727069!3d46.9121539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6ef41e3e1f72609!2sSaloon%20Pizz%C3%A9ria!5e0!3m2!1sen!2shu!4v1651950834308!5m2!1sen!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <style>
        #section1{
            background-image: url('https://c4.wallpaperflare.com/wallpaper/158/311/666/pizza-wide-wallpaper-preview.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
        }
        #innersection1{
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>

@endsection