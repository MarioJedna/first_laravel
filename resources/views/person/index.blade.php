<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Index</title>
</head>

<body>
    <h1>list of people</h1>

    <ul>
        <?php foreach ($people as $person) : ?>
            <li>
                <?= $person->fullname ?>
            </li>
        <?php endforeach; ?>

    </ul>

</body>

</html>