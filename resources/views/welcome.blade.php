@extends('layout')


@section('content')
    
    <div class="title center">
        <h1 style="color: #f530b8">Level Up Your</h1>
        <h1>Planting Game</h1>
    </div>

    <img id="img-header" src="{{ asset('images/resto1.jpg') }}" alt="" srcset="">
    
    <div class="container">
        <div class="container-header">
            <h2>One-stop boutique for all your home and office gardening needs</h2>
            <p>We provide wide variety of plants and gardenign service.</p>
        </div>
        <div class="content">
            <div class="text left">
                <h2>Be A plant parent now!</h2>
                <p>beautify your surroundings by adding a touch of live plant. We provide any plant to suits your environment, plant-medium, and we will guide you through every step in becoming parent.</p>
            </div>
            <img id="img-content" src="{{ asset('images/plant1.jpg') }}" alt="" srcset="">
        </div>
        <div class="content">
            <img id="img-content" src="{{ asset('images/plant2.jpg') }}" alt="" srcset="">
            <div class="text left">
                <h2>Professional plant care</h2>
                <p>Make a great working environment by having plants around to provide fresh air and joyous feelings. We will take care for everything in your office from installation to maintenance</p>
            </div>
        </div>
        <div class="content">
            <div class="text left">
                <h2>Jasper Anjing</h2>
                <p>LOLOLOLOLOLOLOLLOLOLOLOLOLOLOLLOLOLOLOLOLOLOLLOL OLOLOLOLOLOLLOLOLOLOLOLOLOLLOLOLOLOLOLOLOLLOLOLOLOLOLOL OLLOLOLOLOLOLOLOLLOLOLOLOLOLOLOLLOLOLOLOLOLOLOLLOLOLOLOLOL OLOLLOLOLOLOLOLOLOLL OLOLOLOLOLOLOLL OLOLOLOLOLOLOLL OLOLOLOLOLOLOL</p>
            </div>
            <img id="img-content" src="{{ asset('images/jasper.jpg') }}" alt="" srcset="">
        </div>
    </div>
@endsection