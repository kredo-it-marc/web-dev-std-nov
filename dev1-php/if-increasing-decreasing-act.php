<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else Activity</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            
            //PROCESS & OUTPUT
            if($num1<$num2 && $num2<$num3) //check if the input is in increasing order
            {
                echo "<p>Numbers $num1, $num2 and $num3 are in increasing order.</p>";
            }
            elseif($num1>$num2 && $num2 >$num3)//check if input is in decreasing order
            {
                echo "<p>Numbers $num1, $num2 and $num3 are in decreasing order.</p>";
            }
            else
            {
                echo "<p>Numbers $num1, $num2 and $num3 are neither decreasing nor increasing order.</p>";
            }

        }

    ?>
    <form action="" method="post">
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Number 2</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <label for="num3">Number 3</label>
        <input type="number" name="num3" id="num3" required>
        <br><br>
        <input type="submit" value="Submit" name="btn_submit">
    </form>

</body>
</html>