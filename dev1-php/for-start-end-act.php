<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starts With, Ends With</title>
</head>
<body>
    <?php
        if(isset($_POST["btn_submit"]))
        {
            //INPUT
            $start = $_POST["start"];
            $end = $_POST["end"];

            //PROCESS
            if($start < $end)
            {
                for($counter = $start; $counter <= $end; $counter++)
                {
                    echo "<span style='margin-right:5px;'>$counter</span>";
                }
            }
            elseif($start > $end)
            {
                for($counter = $start; $counter>=$end; $counter--)
                {
                    echo "<span style='margin-right:5px;'>$counter</span>";
                }
            }
            else
            {
                echo "<span style='margin-right:5px;'>$start</span>";
            }

        }
    ?>
    <form action="" method="post">
        <label for="start">Enter starting number:</label>
        <input type="number" name="start" id="start" required>
        <br><br>
        <label for="end">Enter ending number:</label>
        <input type="number" name="end" id="end" required>
        <br><br>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>