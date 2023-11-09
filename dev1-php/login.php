<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        //FORM HANDLING CODE
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
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Submit" name="btn_submit">
    </form>

</body>
</html>