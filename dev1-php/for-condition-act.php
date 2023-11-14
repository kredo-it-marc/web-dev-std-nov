<?php
    for($i=1; $i<=10; $i++)
    {
        if($i%2 == 0 && $i != 10) //check if the number is EVEN AND NOT EQUAL to 10
        {
            echo $i.".";
        }
        elseif($i == 10) //check if the number is equal to 10
        {
            echo $i;
        }
        else //the number is ODD
        {
            echo $i."-";
        }
        
          
    }
?>