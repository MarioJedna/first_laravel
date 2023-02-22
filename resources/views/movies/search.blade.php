<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>

<body>
    <h1>Search view of movies section</h1>
    <form action="" method="get">
        <input type="text" name="search" placeholder="Enter name of Movie">
    </form>
    <div class="filteredMovies">
        <ul>
            @foreach ($filteredMovies as $movie)
                <li>{{ $movie->name }} ({{ $movie->year }})</li>
                <ul>
                    <li>Length: {{ $movie->length }}</li>
                    <li>Rating: {{ $movie->rating }}</li>
                </ul>
                <br>
            @endforeach
        </ul>
    </div>

</body>


</html>
