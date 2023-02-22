<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1 style="color: blue;">Index Page for My First Laravel Project</h1>
    <div class="movies">
        <ul>
            @foreach ($movies as $movie)
                {{ $movie->name }}
                <ul>
                    <li>{!! $movie->year !!}</li>
                    <li>{{ $movie->movieType->name }}</li>

                    {{-- comments with Blade --}}

                    <li>Genres:</li>
                    <ul>
                        @foreach ($movie->genres as $genre)
                            <li>
                                <?= $genre->name ?>
                            </li>
                        @endforeach;
                    </ul>
                    <li>Languages:</li>
                    <ul>
                        @foreach ($movie->languages as $language)
                            <li>
                                <?= $language->name ?>
                            </li>
                        @endforeach;
                    </ul>
                </ul>
            @endforeach;
        </ul>
    </div>
</body>

</html>
