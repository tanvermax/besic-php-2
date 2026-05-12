<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div>
       <div>
         <x-test name="acrch" :users="$users" />
       </div>
       <div>
         <x-test name="note" :users="$users"/>
       </div>
       <div>
         <x-test name="note" :users="$users"/>
       </div>
       <div>
         <x-test name="note" :users="$users"/>
       </div>
        <h1>{{$title}}</h1>
        {!! $html !!}

        @if ($isActive)
        condition fulfilment
        @else
        condition not fulfilment

        @endif

        @php
        $i=2;
        @endphp

        @switch($i)
        @case(1)
        fisrt case
        @break
        @case(2)
        Seconde case..
        @break
        @default
        Default case....

        @endswitch

        <br><br>

        @for($i=0;$i
        <10;$i++)
            the current value is {{ $i }}<br />;
        @endfor
<br><br>
        @foreach ($users as $user)
        <p>This is user {{ $user->name }}</p>
        @endforeach
    </div>

</body>

</html>