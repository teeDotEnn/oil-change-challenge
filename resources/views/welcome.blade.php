<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.scss'])
        <title>{{ config('app.name', 'Laravel') }}</title>

    </head>
    <body class="">
        <header class="">
            Welcome to Tim's Oil Change
        </header>
            <main class="">
                <form id="carInfo" method="post" action="/check">
                    @csrf
                    <label for="currentOdometer">Current odometer reading  </label><input type="text" id="currentOdometer" name="currentOdometer"/>
                    <label for="lastOilChangeDate">Date of last oil change  </label><input type="date" id="lastOilChangeDate" name="lastOilChangeDate"/>
                    <label for="lastOdometer">Odometer reading at last oil change  </label><input type="text" id="lastOdometer" name="lastOdometer"/>
                    <input type="submit" value="Send Request" />
                </form>
               @empty($error)
               @else
               <div style="white-space: pre-wrap;" class="error">{{ $error }}</div>
               @endempty
            </main>
    </body>
</html>
