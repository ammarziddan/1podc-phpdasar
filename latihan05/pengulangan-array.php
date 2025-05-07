<?php
// PENGULANGAN PADA ARRAY
// for / foreach

// for
$numbers = [1, 4, 3, 2, 5, 7, 9];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan array</title>

    <style>
        div {
            background-color: salmon;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <h1>Pengulangan Array</h1>

    <?php for ($i = 0; $i < count($numbers); $i++) : ?>
        <div><?= $numbers[$i]; ?></div>
    <?php endfor ?>

    <br>
    <?php foreach ($numbers as $number) : ?>
        <div><?= $number; ?></div>
    <?php endforeach; ?>
</body>

</html>