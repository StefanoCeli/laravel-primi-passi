<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Hello World</h1>

    {{-- istruzione condizionale --}}
    @if ($age < 18)
        <p> {{ $name }} è minorenne </p>
    @elseif ($age >= 65)
        <p> {{ $name }} è anziano </p>
    @else
        <p> {{ $name }} è maggiorenne </p>
    @endif

    {{-- ciclo foreach --}}

   <ul>
        @foreach ($videogames as $videogame )
            @if ($loop ->last)
                <li> <strong> Questo è l'ultimo della lista: </strong>{{$videogame}} </li>
            @elseif ($loop ->first)
                <li> <strong>Questo è il primo della lista: </strong>{{$videogame}} </li>
            @else
                <li> {{ $videogame }} </li>
            @endif
        @endforeach
   </ul>

</body>
</html>