<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rupani Academy</title>
    <link rel="stylesheet" href="{{ asset('Frontend') }}/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="main-navbar">
        <div class="nav-top">
            <div class="container">
                <div class="row py-2 text-white">
                    <div class="col">
                        <span class="me-3"><i class="px-1 fa fa-phone"></i> +92-5811-455928</span>

                        <span><i class="px-1 fa  fa-envelope"></i> info@rupaniacademy.org</span>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a class="text-white" href=""><i class="fa-brands fa-instagram me-4"></i></a>
                        <a class="text-white" href=""><i class="fa-brands fa-facebook me-4"></i></a>
                        <a class="text-white" href=""><i class="fa-brands fa-twitter-square me-4"></i></a>
                        <a class="text-white" href=""><i class="fa-brands fa-youtube me-4"></i></a>
                        <a class="text-white" href=""><i class="fa-brands fa-google-plus me-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Nav-bar">
            <div class="container">
                <div class="row nav-content w-100">
                    <div class="col-2 rupani-acdmey">
                        <img src="{{ asset('Frontend') }}/Assests/navbar_Rupani_Logo.png" alt="rupani-acdmey-logo">
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><a class="active" href="">Home</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Campus Life</a></li>
                            <li><a href="">Curricula</a></li>
                            <li><a class="btn admission" href="">Admissions</a></li>
                        </ul>
                    </div>
                    <div class="col-2 rupani-school">
                        <img src="{{ asset('Frontend') }}/Assests/navbar_school.png" alt="rupani-school-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
