<?php
    // Hier worden constanten gedefinieerd. Een constante kun je niet veranderen.
    define("SERVERNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DBNAME", "rentacar");

    // We maken contact met de database
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
?>