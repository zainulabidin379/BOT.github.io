<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","loginsystem");
    // $con = mysqli_connect("sql309.epizy.com","epiz_25983898","UQwytAAK3pR59p","epiz_25983898_db");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
