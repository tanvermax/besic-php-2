<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Comatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>document</title>
    </head>
    <body class="antialiased">

        <h3>{{ $title ?? 'No title provided' }}</h3>

        <p>{{ $globaltile ?? 'No global variable' }}</p>
              {{ dd($users) }}
    </body>
</html>
