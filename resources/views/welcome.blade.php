<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

        <!-- Styles -->
        <style>
            html, body {
                scroll-behavior: smooth;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 80vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                padding-top: 10rem;
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .login:hover{
                color: #28a745;
            }

            .title {
                font-size: 84px;
                color: #28a745;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /* Source: https://codepen.io/quasimondo/pen/lDdrF */
            #gradient
            {
                width: 100%;a
                height: 800px;
                padding: 0px;
                margin: 0px;
            }
            /* Add a black background color to the top navigation */
            .topnav {
            background-color: #333;
            overflow: hidden;
            }

            * {box-sizing:border-box}

            
            /* Style the links inside the navigation bar */
            .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            }

            /* Change the color of links on hover */
            .topnav a:hover {
            background-color: #ddd;
            color: black;
            }

            /* Add an active class to highlight the current page */
            .topnav a.active {
            background-color: #4CAF50;
            color: white;
            }

            /* Hide the link that should open and close the topnav on small screens */
            .topnav .icon {
            display: none;
            }
            
            @media (min-width: 320px) and (max-width: 480px) {
                .title{
                    font-size: 50px;
                }
                .logo{
                max-height: 4rem;
                }
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        
    </head>
    <body id="gradient">
    

        <section id="intro" class="hero is-success is-fullheight">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <header class="navbar has-background-dark">
            <div class="container">
                <div class="navbar-brand">
                <a class="navbar-item is-size-3-desktop has-text-light">
                    <h1 class="usims">USIMS</h1>
                </a>
                <span class="navbar-burger burger" data-target="navbarMenuHeroC">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                </div>
                <div id="navbarMenuHeroC" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item is-active">
                    Home
                    </a>
                    <a href="#about" class="navbar-item">
                    Learn more
                    </a>
                    <a href="#logn" class="navbar-item">
                    login
                    </a>
                </div>
                </div>
            </div>
            </header>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body has-background-white is-paddingless">
            <img style="height: 100vh; width: 100vw;" src="{{ asset('/img/img1.jpg') }}" alt="">
        </div>

        <!-- Hero footer: will stick at the bottom -->
        </section>
        <section style="padding-top: 9rem;" id="signup" class="section">
            <div class="container is-centered">
            <div class="columns is-centered has-text-centered">
                <div class="column c">
                <a id="sch" href="#" class="subtitle is-size-6 has-text-weight-semibold has-text-dark">
                    <span>
                    <img class="logo" src="{{ asset('/img/sch.svg') }}" />
                    </span>
                    <p>I am a school</p>
                </a>
                </div>
                <div class="column c"> 
                <a id="tch" href="#" class="subtitle is-size-6 has-text-weight-semibold has-text-dark">
                    <span>
                    <img class="logo" src="{{ asset('/img/teach.svg') }}" />
                    </span>
                    <p>I am a teacher</p>
                </a>
                </div>
                <div class="column c">
                <a id="std" href="#" class="subtitle is-size-6 has-text-weight-semibold has-text-dark">
                    <span>
                    <img class="logo" src="{{ asset('/img/stud.svg') }}" />
                    </span>
                    <p>I am a student</p>
                </a>
                </div>
                <div class="column c">
                <a id="prt" href="#" class="subtitle is-size-6 has-text-weight-semibold has-text-dark">
                    <span>
                    <img class="logo" src="{{ asset('/img/father.svg') }}" />
                    </span>
                    <p>I am a parent</p>
                </a>
                </div>
            </div>
            </div>
        </section>

        <section style="height:100vh;" class="content section">
            <div class="flex-center position-ref full-height">
                <div class="container">
                    <div class="title m-b-md text-success">
                        Unity Schools Information Management System
                    </div>
                    <p style="font-size: 25px;">Makes managing schools an amazing experience</p>
                    
                    <p id="logn" class="links">
                        @if (Route::has('login'))
                            @auth
                                <a  class="login" href="{{ url('/home') }}">Home</a>
                            @else
                            <a class="login" href="{{ route('login') }}">Login</a>
                            @endauth
                        @endif
                            <a style="display: none" class="login" href="#learnmore">
                                Learn more
                            </a>
                    </p>
                </div>
            </div>
        </section>            

        <section id="about" class="learnmore section">
            <div class="container is-centered has-text-justified">
                <h1 class="title has-text-success">What is USIMS</h1>
                <div>
                        It is a software-based school management system helps teachers, administrators, and 
                        support staff streamline their daily duties.<br> You can easily note whatever happens 
                        in the classroom, the school office, or anywhere in the facility. With just a few 
                        clicks,<br> authorized users can pull a student’s entire history, all of the transactions
                        affiliated with a remodeling project,<br> or even a history of the school’s special
                        events or fundraisers.
                        
                        School management system also helps to improve<br> communications between the school, its students, and their parents.
                </div>
                <h1 style="padding-top: 2rem;" class="title has-text-success">Why USIMS</h1>
                <div>
                    A School is an organization having large amount of data resources spread up in
                    all directions in form of clerks, teachers, students, staff<br> and so on and wants
                    to provide best of the facilities to its students efficiently and in a best manner.
                    USIMS provides the best solutions<br> for all the school needs.
                    a company which has been doing software development jobs over a decade and 
                    satisfying the customers <br>over the globe since long. Iolite School Management 
                    System is especially designed for the School people by our team to make functioning of<br>
                        school administration and management work of an institute effortless and easy which is carried 
                        out on a daily basis. USIMS is an easy and simple <br>to use software that
                        makes daily routine work hassle-free and accurate.
                </div>
            </div>
        </section>

        <div class="section has-background-dark">
        <div class="container">
            <div class="columns is-mobile">
                <div class="column has-text-centered">
                    <figure>
                    <img id="logo" src="{{ asset('/img/fmoe.png') }}" />
                    </figure>
                </div>
                <div class="column has-text-centered">
                    <figure>
                        <img id="logo" src="{{ asset('/img/cad.jpeg') }}" />
                    </figure>
                </div>
            </div>
        </div>
        </div>
        
        <script>
            var burger = document.querySelector('.burger');
            var nav = document.querySelector('#'+burger.dataset.target);
            burger.addEventListener('click', function(){
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
            });

            
        </script>
        <script src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
    </body>
</html>
