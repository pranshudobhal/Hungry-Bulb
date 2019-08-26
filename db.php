<?php

//    mysql_connect("localhost", "root", "");
//    mysql_select_db("testing");

       $servername = "localhost";  
       $username = "root";  
       $password = "";  

       $conn = mysqli_connect ($servername , $username , $password, "hungrybulb") or die("unable to connect to host");
       

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Connected successfully";
?>