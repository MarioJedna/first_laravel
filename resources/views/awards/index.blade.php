<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awards | Laravel</title>
</head>

<body>
    <h1>List of awards</h1>
    <div class="awards">
        <?php
        foreach ($awards as $award) {
            echo "<div class='award'>{$award}</div>";
        }
        ?>
    </div>

</body>

</html>