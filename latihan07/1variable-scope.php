<?php

// VARIABLE SCOPE
$x = 10;

function getX()
{
    global $x;
    // $x = 20;

    echo $x;
}

getX();
// echo "<br>";
// echo $x;
