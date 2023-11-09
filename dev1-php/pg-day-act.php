<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="Monday" name="btn_day">
        <input type="submit" value="Tuesday" name="btn_day">
        <input type="submit" value="Wednesday" name="btn_day">
        <input type="submit" value="Thursday" name="btn_day">
        <input type="submit" value="Friday" name="btn_day">
    </form>
    <?php
        if( isset($_POST["btn_monday"]) )
        {
            //INPUT
            $day = $_POST["btn_monday"];
            //OUTPUT
            echo "<p>$day</p>";
        }

        if( isset($_POST["btn_tuesday"]) )
        {
            //INPUT
            $day = $_POST["btn_tuesday"];
            //OUTPUT
            echo "<p>$day</p>";
        }

        if( isset($_POST["btn_wednesday"]) )
        {
            //INPUT
            $day = $_POST["btn_wednesday"];
            //OUTPUT
            echo "<p>$day</p>";
        }

        if( isset($_POST["btn_thursday"]) )
        {
            //INPUT
            $day = $_POST["btn_thursday"];
            //OUTPUT
            echo "<p><$day/p>";
        }

        if(isset($_POST["btn_friday"]))
        {
            //INPUT
            $day = $_POST["btn_friday"];
            //OUTPUT
            echo "<p>$day</p>";
        }

        if(isset($_POST["btn_day"]))
        {
            //INPUT
            $day = $_POST["btn_day"];
            //OUTPUT
            echo "<p>$day</p>";
        }
    ?>

</body>
</html>