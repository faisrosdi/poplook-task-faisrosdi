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

            .card:hover {
                background: url("images/card-front.jpg") no-repeat;
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
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>
                    <div class="row">
                        @foreach($response['data'] as $response)
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch">
                            <a href="{{ url('product_info/'. $response['id_product']) }}">
                                <div class="card w-100 my-3 border-0 ">
                                    <img class="card-img-top" src="{{$response['image_url'][0]}}" alt="Card image cap">
                                    <div class="card-body bg-transparent">
                                        <h5 class="card-title">{{$response['name']}}</h5>
                                        <p class="card-text">RM {{ number_format((float)$response['newprice'], 2, '.', '') }}</p>
                                    </div>
                                </div>
                            </a>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
