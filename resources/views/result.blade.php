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
            </div>

        </header>
        <main class="container-fluid">
            <div>
                <h1>{{$message}}</h1>
            </div>
            
            <div class="row align-items-start">
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
