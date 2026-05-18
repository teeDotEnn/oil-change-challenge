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
                <form id="carInfo">
                    <label for="currentOdometer">current odo</label><input type="text" id="currentOdometer"/>
                    <label for="lastOilChangeDate">current odo</label><input type="date" id="lastOilChangeDate"/>
                    <label for="lastOdometer">current odo</label><input type="text" id="lastOdometer"/>
                </form>
               <input type="submit" value="Send Request" />
            </main>

        
    </body>
</html>
