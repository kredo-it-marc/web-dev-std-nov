<h1>Internal / Built-in Functions</h1>
<?php
    $str1 = "i am in lowercase";
    $str2 = "I AM IN UPPERCASE";

    //strtoupper() converts the string to uppercase
    //strtolower() converts the string to lowercase
    echo strtoupper($str1),"<br>";
    echo strtolower($str2),"<br>";
    
    // var_dump() => displays the data type and the value
    var_dump($str1);

    // isset() returns TRUE if the variable has a value. Otherwise, false
    echo isset($str2),"<br>";
    echo isset($str3),"<br>";

?>
<hr>
<h1>User-defined Functions</h1>
<?php
    // no arguments, no return
    function printHello()
    {
        echo "Hello World!";
    }

    //1 argument, no return
    function greetUser($name)
    {
        echo "<p>Hello, $name!</p>";
    }

    //2 arguments, has return
    function average($x, $y) //calculate the average of the 2 numbers
    {
        $ave = ($x + $y) /2; //process
        // echo "<p>The average of $x and $y is $ave</p>"; //output
        return $ave;
    }

    //function call
    printHello();
    greetUser("Tetsuto");
    greetUser("Sakura");
    greetUser("John");
    greetUser("James");
    $ave = average(11, 15);
    echo "<p>Ave: $ave</p>";

    echo average(89, 85);
?>