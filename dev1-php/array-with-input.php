<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array With Input</title>
</head>
<body>
    <form action="" method="post">
        <label for="no-of-countries">How many countries have you been to?</label>
        <input type="number" name="no_of_countries" id="no-of-countries" required>
        <input type="submit" value="Set" name="btn_set">
    </form>

    <form action="" method="post">
        <?php
        // form handling code for the first form
            if( isset($_POST["btn_set"]) )
            {
                //input
                $no_of_countries = $_POST["no_of_countries"];

                //output
                echo "<hr>";

                for($i=1; $i<= $no_of_countries; $i++) //display input fields
                {
                    echo "<label for='country-$i'>Country $i</label>";
                    echo "<input type='text' name='country[]' id='country-$i' required><br><br>";
                }

                echo "<input type='submit' name='btn_save' value='Save'>";
            }
        ?>
    </form>

    <!-- form handling for the 2nd form -->
    <?php
        if( isset($_POST["btn_save"]) )
        {
            //INPUT
            $countries = $_POST["country"]; //array

            //PROCESS & OUTPUT
            foreach($countries as $country)
            {
                echo "<h1>$country</h1>";
            }
            
        }
    ?>
</body>
</html>