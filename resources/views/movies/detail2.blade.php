<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $selectedMovie[0]->name }}</title>
    <link rel="stylesheet" href="/style.css">

</head>

<body>

    @include('common.messages')

    <a href="{{ route('movies.create') }}">Would you like to enter new movie?</a>

    <h1>{{ $selectedMovie[0]->name }} ({{ $selectedMovie[0]->year }})</h1>
    <h4 style="color:grey">id: {{ $selectedMovie[0]->id }}</h4>
    <form action="/movies/rate" method="post">
        @csrf

        <input type="hidden" name="movie_id" value="<?= $selectedMovie[0]->id ?>">
        <input type="text" name="text">
        <button type="submit">Review Movie</button>

    </form>

    <ul>
        <h3>Reviews</h3>
        @foreach ($selectedMovie[0]->reviews as $review)
            <li>{{ $review->text }}</li>
        @endforeach
    </ul>

    <ul>
        <h3>Cast</h3>
        @foreach ($selectedMovie[0]->people as $person)
            <li>{{ $person->fullname }}</li>
        @endforeach
    </ul>



</body>

</html>
