<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Carlos</h1>
    <a href="{{ route('about') }}">Voir la page a propos</a>

    <p>
        {{ $name }}
    </p>

    <h2>
        @if($jour > 5)
        <span>Nous sommes le week end</span>
        @else
        <span>Nous sommes en semaine !</span>
        @endif
    </h2>

    <ol>
        @foreach ($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ol>

</body>

</html>
