<?php
    $numbers = [1000, 100, 37.5, 122.07, 800, 15, 7, 233.01, 233.02, 300];

    $largest_value = NULL; //NULL means empty or no value

    foreach($numbers as $x)
    {
        if($largest_value < $x)
        {
            $largest_value = $x;
        }
    }

    echo "<p>The largest number is $largest_value</p>";
?>