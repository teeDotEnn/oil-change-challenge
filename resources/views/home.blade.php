<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.scss'])
        <title>{{ config('app.name', 'Laravel') }}</title>

    </head>
    <body class="">
        <header class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="navbar-brand">Welcome to Tim's Oil Change</div>
            </div>
        </header>
            <main class="container-fluid">
                <form id="carInfo" method="post" action="/check">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="currentOdometer">Current odometer reading</label>
                        <input class="form-control" type="text" id="currentOdometer" name="currentOdometer" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="lastOilChangeDate">Date of last oil change</label>
                        <input class="form-control" type="date" id="lastOilChangeDate" name="lastOilChangeDate" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="lastOdometer">Odometer reading at last oil change</label>
                        <input class="form-control" type="text" id="lastOdometer" name="lastOdometer" required/>
                    </div>
                    <input type="submit" value="Send Request" />
                </form>
               @empty($error)
               @else
               <div style="white-space: pre-wrap;" class="error">{{ $error }}</div>
               @endempty
            </main>
    </body>
</html>
