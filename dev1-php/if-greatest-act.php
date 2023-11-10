<?php
    $num1 = 10000;
    $num2 = 20000;
    $num3 = 300000;

    if($num1>$num2 && $num1>$num3) //check if $num1 has the largest value
    {
        echo "<p>$num1 is the largest number</p>";
    }

    if($num2 > $num1 && $num2 > $num3) //check if $num2 has the largest number
    {
        echo "<p>$num2 is the largest number</p>";
    }

    if($num3 >$num1 && $num3>$num2) //check if $num3 has the largest number
    {
        echo "<p>$num3 is the largest number</p>";
    }
?>