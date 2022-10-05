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
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <img src="{{ $response['data']['image_url_lg'][0]}}" class="w-100">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <img src="{{ $response['data']['image_url_lg'][1]}}" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
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
    </body>
</html>
