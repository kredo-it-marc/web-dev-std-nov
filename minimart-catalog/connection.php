<?php
    function dbConnect()
    {
        $server_name = "localhost";
        $username = "root"; //MAMP and XAMPP uses 'root'
        $password = ""; //MAMP uses 'root', XAMPP has no password, so you place ''
        $dbname = "minimart_catalog";
    
        $conn = new mysqli($server_name, $username, $password, $dbname);
    
        // new mysqli($server_name, $username, $password, $dbname) creates a connection to the database. it will be assigned to $conn
    
        //check if the connection is successful
        // $conn->connect_error contains the error message if there are any errors upon connecting to the database
        if($conn->connect_error)
        {
            die("Database Connection Failed: ". $conn->connect_error);
            //die() stops running any code and display the argument instead.
        }
        else
        {
            // echo "Connection Successful";
            return $conn;    
        }
    }
?>
