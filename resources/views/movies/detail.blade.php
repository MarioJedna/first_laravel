<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Shawshank redemption</title>
</head>

<body>
    <h1><?= "{$movie->name} ({$movie->year})" ?></h1>

    <!-- <div class="positions">
        <?php foreach ($positions as $position) : ?>
            <div class="position">
                <?php echo "<strong>{$position->Position}</strong>"; ?>
                <?php foreach ($positions as $name) : ?>
                    <div class="name">
                        <?php
                        if ($position->Position == $name->Position) {
                            echo $name->fullname;
                        }
                        ?>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endforeach; ?>
    </div> -->


</body>

</html>