<h1>Indexed Array</h1>
<?php
    //creating an array
    //method 1 - []
    $fruits = ["Mango","Banana","Grapes"];

    //method 2 - array()
    $vegetables = array("Carrots", "Lettuce", "Broccoli");

    //Assigning values to the array
    // $array_name[index]
    $colors[0] = "Black";
    $colors[1] = "Blue";
    $colors[2] = "Red";
    $colors[3] = "Yellow";

    //Displaying values from the array
    echo $fruits[0],"<br>"; // Mango
    echo $fruits[1],"<br>"; //Banana
    echo $fruits[2],"<br>"; //Grapes

    echo $vegetables[0],"<br>"; //Carrots
    echo $vegetables[1],"<br>"; //Lettuce
    echo $vegetables[2],"<br>"; //Broccoli

    echo $colors[0],"<br>"; //Black
    echo $colors[1],"<br>"; //Blue
    echo $colors[2],"<br>"; //Red
    echo $colors[3],"<br>"; //Violet

    // print_r(); display the array in a human readable format
    print_r($fruits);
    echo "<br>";
    print_r($vegetables);
    echo "<br>";
    print_r($colors);
    echo "<br>";

    //count(); returns how many elements or values there are in the array
    echo count($fruits),"<br>"; //3
    echo count($vegetables),"<br>";//3
    echo count($colors),"<br>";//4

    foreach($fruits as $x)
    {
        echo "<p>$x</p>";
    }

    foreach($vegetables as $y)
    {
        echo "<p>$y</p>";
    }

    foreach($colors as $color)
    {
        echo "<p>$color</p>";
    }
?>