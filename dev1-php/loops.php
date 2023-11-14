<h1>While Loop</h1>
<?php
    $num = 1;

    while( $num < 5 )
    {
        //loop body
        //while-block => you place the code here that you wish to run repeatedly
        echo "<p>$num: is less than 5.</p>";
        $num++;
    }
?>
<hr>
<h1>Do-WHile Loop</h1>
<?php
    $num = 1;

    do{
        //do-block or loop body
        echo "<p>$num: is less than 5</p>";
        $num++;
    }while( $num < 5 );

?>
<hr>
<h1>For Loop</h1>
<?php

    for( $num = 1; $num < 5; $num++)
    {
        //for-block or the loop body
        echo "<p>$num: is less than 5.</p>";
    }

?>
<hr>
<h1>Nested Loop</h1>
<?php
    for($x=1; $x <=5; $x++) //display levels/rows
    {
        for($y=1; $y <=5; $y++) //display stars
        {
            echo "*";
        }
        echo "<br>";
    }

?>
<hr>
<?php
    //outer loop
    for($x = 1; $x<=7; $x++) //display levels/rows
    {
        //inner loop
        for($y=1; $y <=$x; $y++) //display stars
        {
            echo "*";
        }
        echo "<br>";
    }
?>
<hr>
<?php
    //outer loop
    for($x = 1; $x<=5; $x++) //display levels/rows
    {
        //inner loop
        for($y=1; $y <=$x; $y++) //display numbers
        {
            echo $y;
        }
        echo "<br>";
    }

?>