<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 50 games</title>
</head>

<body>
    <h1>Top 50 Games</h1>
    <div class="topGames">
        <?php
        foreach ($top_games as $top_game) {
            echo "<div class='topGames'>{$top_game->name} {$top_game->rating}</div>";
        }
        ?>
    </div>
</body>

</html>