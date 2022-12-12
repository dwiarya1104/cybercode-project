<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberCode</title>

    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="stylesheet" href="/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="/assets/images/logo/tiaraicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/logo/tiaraicon.png" type="image/png">

    <link rel="stylesheet" href="/assets/css/shared/iconly.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        body {
            justify-content: center;
            align-items: center;
            background-image: url('/assets/images/bg.png');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: overlay;
        }


        .nav-link {
            color: white;
        }

        a.nav-link:hover {
            color: white
        }

        .navbar-brand {
            color: white;
            font-size: 30px;
        }

        .navbar-brand:hover {
            color: white;
        }

        .card {
            /* transition: transform .5s; */
            border-radius: 15px;
            backdrop-filter: blur(50px);
            background-color: rgba(17, 14, 14, 0.4);
            border: 2px solid grey;
            color: white;
            overflow: hidden;
        }

        .card-header,
        .card-footer {
            background-color: transparent
        }

        .card-text {
            border-radius: 10px;
            border: 2px solid grey;
            height: 170px;
        }

        ::-webkit-scrollbar {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: lightgrey;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-corner {
            border-radius: 10px;
            background: lightgray
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg transparent navbar-inverse">
        <div class="container">
            <a class="navbar-brand" href="https://www.instagram.com/anothersideofrpl/?hl=id"
                target="_blank">CyberCode</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item">
                        <i class="bi bi-grid-3x3-gap-fill"></i>
                    </li> --}}
                    <li class="nav-item">
                        <h4>
                            <a class="nav-link" href="{{ route('login') }}">
                                Login
                            </a>
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="content">
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($application as $app)
                    <div class="col">
                        <div class="card overflow-hidden h-100">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-header">{{ $app->name }}</h5>
                                </div>
                                <div class="col-6 text-center">
                                    <a href="{{ $app->url }}" target="_blank">
                                        <h5 class="card-header text-white fw-light float-end"> Visit <i
                                                class="bi bi-arrow-up-right"></i></h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <img src="{{ $app->image }}" height="150px" class="card-img" alt="...">

                                <p class="card-text p-3 mt-3">{{ $app->description }}</p>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="row">
                                    <div class="col-4">
                                        <p>{{ $app->year }}</p>
                                    </div>
                                    <div class="col-8 align-items-right">
                                        <p class="text-end">
                                            {{ $app->created_by }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>
