<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            a {
                text-decoration: none;
                color: #333;
            }

            a:hover {
                color: #333;
            }

            * {
                box-sizing: border-box
            }

            .mySlides {
                display: none
            }

            img {
                vertical-align: middle;
            }

            /* Slideshow container */
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }

            /* Caption text */
            .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

            span.active {
                background-color: #717171;
            }

            /* Fading animation */
            .fade {
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
                .text {font-size: 11px}
            }
        </style>
    </head>
    <body class="p-0 m-0">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">poplook</a>
            </nav>
            <div class="row justify-content-center mt-4">
                <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Product List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Info</li>
                        </ol>
                    </nav>
                    
                    <div class="row mt-2">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="slideshow-container">
                                @foreach($response['data']['image_url_lg'] as $item)
                                    <div class="mySlides fade">
                                        <img src="{{ $item }}" class="mx-auto d-block" style="width:80%;">
                                    </div>
                                @endforeach
                            </div><br>
                            
                            <!-- The dots/circles -->
                            <div style="text-align:center">
                                @foreach($response['data']['image_url_lg'] as $item)
                                    <span class="dot"></span> 
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                            <h5 class="fw-bold">{{ $response['data']['name']}}</h5>
                            <p>RM {{ number_format((float)$response['data']['price'], 2, '.', '') }}</p>
                            <span>Details:</span>
                            {!!$response['data']['description']!!}

                            <button class="btn btn-dark">Add To Card</button>
                            <span>{{ $response['data']['quantity']}} pieces available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 800); // Change image every 2 seconds
            }
        </script>
    </body>
</html>
