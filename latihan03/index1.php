<?php

// **Pengulangan
// for, while, do...while, foreach
// // for
// for ($i = 0; $i < 10; $i++) {
//     echo $i + 1 . "<br>";
// }

// // while
// $i = 0;
// while ($i < 5) {
//     echo "Hello world!<br>";
//     $i++;
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>

    <style>
        .warna {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna">
                    <?php for ($j = 1; $j <= 4; $j++) : ?>
                        <!-- <td><?php echo "$i, $j" ?></td> -->
                        <td><?= "$i, $j" ?></td>
                    <?php endfor; ?>
                </tr>
            <?php else : ?>
                <tr>
                    <?php for ($j = 1; $j <= 4; $j++) : ?>
                        <!-- <td><?php echo "$i, $j" ?></td> -->
                        <td><?= "$i, $j" ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endif; ?>
        <?php endfor; ?>
    </table>
</body>

</html>