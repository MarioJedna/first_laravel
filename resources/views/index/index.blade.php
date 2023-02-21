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
            <?php foreach ($movies as $movie) : ?>

                <?= $movie->name ?>
                <ul>
                    <li><?= ($movie->year) ?></li>
                    <li> <?= $movie->movieType->name ?></li>

                    <li>Genres:</li>
                    <ul>
                        <?php foreach ($movie->genres as $genre) : ?>
                            <li>
                                <?= $genre->name ?>
                            </li>

                        <?php endforeach; ?>
                    </ul>
                </ul>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>