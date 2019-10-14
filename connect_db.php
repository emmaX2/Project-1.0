<?php
    // Hier worden constanten gedefinieerd. Een constante kun je niet veranderen.
    define("SERVERNAME", "");
    define("USERNAME", "");
    define("PASSWORD", "");
    define("DBNAME", "");

    // We maken contact met de database
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
?>