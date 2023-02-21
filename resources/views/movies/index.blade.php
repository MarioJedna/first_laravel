<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>Movies Index</h1>
    <ul>
        <?php foreach ($movies as $movie) : ?>
            <?= "<li>{$movie->name} ({$movie->year})</li>" ?>
        <?php endforeach; ?>
    </ul>

    <h2>Choose a year to filter the results</h2>

    <ul>
        <?php foreach ($movies->pluck('year')->unique()->sort() as $year) : ?>
            <li>
                <?= $year ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>