<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Activity</title>
</head>
<body>
    <?php
        //FORM HANDLING CODE
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $input = $_POST["num_input"];

            //PROCESS
            $factorial = factorial($input);

            //OUTPUT
            echo "<p>The factorial $input is $factorial</p>";
        }
    ?>
    <form action="" method="post">
        <label for="num">Enter Number:</label>
        <input type="number" name="num_input" id="num" required min="0">
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>
<?php
    function factorial($x)
    {
        $factorial = 1;

        if($x == 0)
        {
            return $factorial;
        }
        else
        {
            for($i=$x; $i>=1; $i--)
            {
                $factorial *= $i;
            }

            return $factorial;
        }
    }
?>