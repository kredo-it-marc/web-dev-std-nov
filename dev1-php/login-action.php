<?php
    if( isset($_GET["btn_submit"]) ) //check if the submit button is clicked
    {
        //INPUT
        $username = $_GET["username"];
        $password = $_GET["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }

    if( isset($_POST["btn_submit"]) )
    {
        //INPUT
        $username = $_POST["username"];
        $password = $_POST["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }
?>