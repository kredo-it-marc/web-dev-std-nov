<?php
    $contacts = ["John"=>"USA","Sakura"=>"Japan","Tetsuto"=>"Japan"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Pages</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $name = $_POST["contact"];

            //PROCESS & OUTPUT
            echo "<p>Name: $name</p>";
            echo "<p>Address: ".$contacts[$name]."</p>";
        }
    ?>
    <form action="" method="post">
        <label for="contact">Contacts</label>
        <select name="contact" id="contact" required>
            <option selected disabled>Select a contact</option>
            <?php
                foreach($contacts as $name => $address)
                {
                    echo "<option value='$name'>$name</option>";
                }
            ?>
        </select>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>