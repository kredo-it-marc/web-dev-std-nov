<?php
    echo "Hello World!";
    echo "<h1>Headline 1</h1>";
    echo "Mary","Tim";
    echo "<p> I am "."a text "."paragraph.</p>"
?>
<hr>
<h1>Variables</h1>
<?php
    $first_name = "John";
    $last_name = "Smith";
    $age = 21;

    echo "<p>My name is $first_name $last_name. I am $age years old.</p>";
?>
<hr>
<h1>Data Type</h1>
<?php
    $str = "I am a string.";
    $int = 500;
    $float_or_double = 132.009;
    $bool = TRUE;

    var_dump($str);
    echo "<br>";
    var_dump($int);
    echo "<br>";
    var_dump($float_or_double);
    echo "<br>";
    var_dump($bool);
    echo "<br>";
?>
<hr>
<h1>Operators</h1>
<h2>Arithmetic Operators</h2>
<?php
    $num1 = 11;
    $num2 = 5.006;
    $num3 = 98;
    $num4 = 25;

    $sum = $num1 + $num2; //Addition
    $difference = $num2 - $num3; //Subtraction
    $product =$num3 * $num4; //Multiplication
    $quotient = $num3 / $num4; //Division
    $remainder = $num3 % $num4; //Modulo

    echo "<p>The sum of $num1 and $num2 is $sum</p>";
    echo "<p>The difference of $num2 and $num3 is $difference</p>";
    echo "<p>The product of $num3 and $num4 is $product</p>";
    echo "<p>The quotient of $num3 divided by $num4 is $quotient</p>";
    echo "<p>The remainder of $num3 divided by $num4 is $remainder</p>";
?>
<h2>Assignment Operator</h2>
<?php
    $num1 = 100;
    $num2 = 11.65;
    $num3 = 77;
    $num4 = 32.7;
    $num5 = 9.06;
    $num6 = 15;

    echo "<p>Initial Value</p>";
    echo "<p>num1 = $num1</p>";
    echo "<p>num2 = $num2</p>";
    echo "<p>num3 = $num3</p>";
    echo "<p>num4 = $num4</p>";
    echo "<p>num5 = $num5</p>";

    $num1 += $num6; // $num1 = $num1 + $num6;
    $num2 -= $num6; // $num2 = $num2 - $num6;
    $num3 *= $num6; //$num3 = $num3 * $num6;
    $num4 /= $num6; //$num4 = $num4 / $num6;
    $num5 %= $num6; //$num5 = $num5 % $num6;

    echo "<p>Final Value</p>";
    echo "<p>num1 = $num1</p>";
    echo "<p>num2 = $num2</p>";
    echo "<p>num3 = $num3</p>";
    echo "<p>num4 = $num4</p>";
    echo "<p>num5 = $num5</p>";
?>
<hr>
<h2>Increment Operator (++)</h2>
<?php
    $x = 300;
    echo "<p>Initial Value: $x</p>";
    echo "<p>Preincrement: ".++$x."</p>";
    echo "<p>Postincrement: ".$x++."</p>";
    echo "<p>Final Value: $x</p>";
?>
<hr>
<h2>Decrement Operator(--)</h2>
<?php
    $y=16;
    echo "<p>Initial Value: $y</p>";
    echo "<p>Predecrement: ".--$y."</p>";
    echo "<p>Postdecrement: ".$y--."</p>";
    echo "<p>Final Value: $y</p>";
?>
<hr>
<h2>Comparison Operator</h2>
<?php
    $num1 = 5; //int
    $num2 = 5.0; //float/double
    $num3 = 120;
    $num4 = 52;

    $equal = ($num1 == $num2); //TRUE 5 and 5.0 are equal
    $identical = ($num1 === $num2); //FALSE 5 and 5.0 are equal BUT the 2 values are NOT of the same data type
    $not_equal = ($num1 != $num3); //TRUE
    $not_equal2 = ($num2 <> $num4); //TRUE
    $greater_than = ($num3 > $num1); //TRUE
    $greater_than_or_equal_to = ($num3 >= $num1); //TRUE
    $less_than = ($num4 < $num2); //FALSE
    $less_than_or_equal_to = ($num4 <= $num2); //FALSE

    echo "<p>($num1 == $num2) is $equal</p>";
    echo "<p>($num1 === $num2) is $identical</p>";
    echo "<p>($num1 != $num3) is $not_equal</p>";
    echo "<p>($num2 <> $num4) is $not_equal2</p>";
    echo "<p>($num3 > $num1) is $greater_than</p>";
    echo "<p>($num3 >= $num1) is $greater_than_or_equal_to</p>";
    echo "<p>($num4 < $num2) is $less_than</p>";
    echo "<p>($num4 <= $num2) is $less_than_or_equal_to</p>";
?>