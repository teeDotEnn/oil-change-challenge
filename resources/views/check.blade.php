<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

    </head>
    <body class="">
        <header class="">
            Welcome to Tim's Oil Change
        </header>
            <main class="">
                
            <p>Can you get an oil change? {{$valid}}</p>
            <p>Can you get an oil change? {{$error}}</p>
            </main>
    </body>
</html>
