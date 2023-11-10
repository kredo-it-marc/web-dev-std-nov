<h1>Conditional Statements</h1>
<h2>If Statement</h2>
<?php
    $num = 5;

    if( $num <= 5 )
    {
        //if-block => the code here only runs if the condition is TRUE
        echo "<p>$num is less than 5</p>";
    }
?>
<hr>
<h2>If-Else Statement</h2>
<?php
    $x = 89;

    if( $x == 100 )
    {
        // if-block =>runs if the condition is TRUE
        echo "<p>You got a perfect score!</p>";
    }
    else
    {
        //else-block => runs if the condition is FALSE
        echo "<p>Kindly check your mistakes.</p>";
    }
?>
<hr>
<h2>If-elseif-else Statement</h2>
<?php

    /**
     * pH Scale
     * 0-6 = Acidic
     * 7 =  Neutral
     * 8-14 = Alkaline
     */

     $ph = 35;

    if( 0<=$ph && $ph<=6 ) //check if ph is between 0-6
    {
        echo "<p>$ph is ACIDIC</p>";
    }
    elseif($ph == 7) //check if ph is at 7
    {
        echo "<p>$ph is NEUTRAL</p>";
    }
    elseif(8<=$ph && $ph<=14) //check if ph is between 8-14
    {
        echo "<p>$ph is AN ALKALINE</p>";
    }
    else
    {
        echo "<p>$ph is INVALID</p>";
    }   

?>