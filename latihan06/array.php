<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: darkkhaki;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin: 3px;
        }
    </style>
</head>

<body>
    <?php
    $numbers = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>
    <?php foreach ($numbers as $number) : ?>
        <?php foreach ($number as $n) : ?>
            <div><?= $n ?></div>
        <?php endforeach; ?>
        <br>
    <?php endforeach; ?>

</body>

</html>