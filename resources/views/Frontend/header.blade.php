<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rupani Academy</title>
    <link rel="shortcut icon" href="{{ asset('Frontend') }}/Assests/navbar_Rupani_Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('Frontend') }}/style.css" />
    <link rel="stylesheet" href="{{ asset('Frontend/Assests/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/Assests/fontawesome-free-6.1.0-web/fontawesome-free-6.1.0-web/css/all.css') }}">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body>
    <div class="main-navbar">
        <div class="nav-top">
            <div class="container">
                <div class="row py-2 text-white">
                    <div class="col">
                        <span class="me-3"><i class="px-1 fa fa-phone"></i> +92-5811-458926</span>

                        <span><i class="px-1 fa  fa-envelope"></i> info@rupaniacademy.org</span>
                        {{-- <span><i class="px-1 fa  fa-envelope"></i> rupaniacademy@gmail.com</span> --}}
                    </div>
                    
                    <div class="col d-flex justify-content-center" >
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
                <div class="row nav-content w-100 ">
                    <div class="col-2 rupani-acdmey d-flex justify-content-center">
                        <img src="{{ asset('Frontend') }}/Assests/navbar_Rupani_Logo.png" alt="rupani-acdmey-logo">
                    </div>
                    <div class="col-8 d-flex justify-content-center">
                        <ul class="nav-links" style="color: white">
                            <!-- USING CHECKBOX HACK -->
                            <input type="checkbox" id="checkbox_toggle" />
                            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
                            <!-- NAVIGATION MENUS -->
                            <div class="menu">
                                <li class="nav-item"><a href="/">Home</a></li>
                                <li class="dropdown">
                                  <a class="dropbtn" href="/" >About us</a>
                                  <!-- DROPDOWN MENU -->
                                   <ul class="dropdown-content" id="dp-menu">
                                    <li><a  class="dropdown-item" href="/">Background </a></li>
                                    <li><a class="dropdown-item" href="/">Principal's Message</a></li>
                                  </ul> 
                                </li>
                              <li class="nav-item"><a href="">Policy</a></li>
                              <li class="nav-item"><a href="">Campus Life</a></li>
                              <li class="nav-item"><a href="">Curricula</a></li>
                              <li class="nav-item"><a href="">Career</a></li>    
                            </div>
                          </ul>
                    </div>
                    <div class="col-2 rupani-school d-flex justify-content-center">
                        <img src="{{ asset('Frontend') }}/Assests/navbar_school.png" alt="rupani-school-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- new --}}
    