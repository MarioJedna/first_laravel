<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 50 movies</title>
</head>

<body>
    <h1>Top 50 Movies</h1>
    <div class="topMovies">
        <?php foreach ($top_movies as $top_movie) : ?>
            <?= "<div class='topMovie'>{$top_movie->name} {$top_movie->rating}</div>" ?>
            <ul>
                <li>Genres:</li>
                <ul>
                    <?php foreach ($top_movie->genres as $genre) : ?>
                        <li>
                            <?= $genre->name ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </ul>
        <?php endforeach; ?>

    </div>
</body>

</html>