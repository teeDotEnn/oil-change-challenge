<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.scss'])
        <title>{{ config('app.name', 'Laravel') }}</title>

    </head>
    <body>
        <header class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="navbar-brand">Welcome to Tim's Oil Change</div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                </ul>
            </div>

        </header>
        <main class="container-fluid text-center">
            <div>
                <h3>{{$message}}</h3>
            </div>

            <div class="row justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Current Odometer Reading</h5>
                        <p class="card-text">{{$currentOdometer}}</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Odometer Reading at Last Oil Change</h5>
                        <p class="card-text">{{$lastOdometer}}</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Date of Last Oil Change</h5>
                        <p class="card-text">{{$lastOilChange}}</p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
