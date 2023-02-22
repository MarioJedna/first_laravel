<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person Detail</title>
</head>

<body>
    <h1>Person Detail</h1>
    <h2>Actor: {{ $selectedPerson[0]->fullname }}</h2>
    <h3>Movies</h3>
    <ul>
        @foreach ($selectedPerson[0]->movies as $movie)
            <li>{{ $movie->name }}</li>
        @endforeach
    </ul>

</body>

</html>
