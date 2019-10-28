<?php
    include("./connect_db.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    $sql = "SELECT * FROM `user` WHERE `email` = $email";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        //Ga verder met het inloggen
        $record = mysqli_fetch_assoc($result);

        $blowfish_password = $record["password"];

        if (password_verify($password, $blowfish_password)){

            $_SESSION["id"] = $record["id"];
            $_SESSION["email"] = $email;
            $_SESSION["userrole"] = $record["userrole"];

            switch ($record["userrole"]) {
                case 'customer':
                  echo '<div class="alert alert-success" role="alert">U bent succesvol ingelogd. U wordt doorgestuurd naar de homepagina</div>';
                  header("Refresh: 3; url=./index.php?content=home");
                break;
                case 'admin':
                  echo '<div class="alert alert-success" role="alert">U bent succesvol ingelogd. U wordt doorgestuurd naar de homepagina</div>';
                  header("Refresh: 3; url=./index.php?content=home");
                break;
                default:
                  echo '<div class="alert alert-warning" role="alert">U bent succesvol ingelogd. Maar uw gebruikersrol bestaat niet. U wordt doorgestuurd naar de standaard homepagina</div>';      
                  header("Refresh: 3; url=./index.php?content=home");
                break; 
            }  

        } else {
            // wachtwoord is niet bekend in database, terugsturen naar het inlogformulier
            echo '<div class="alert alert-danger" role="alert">Uw wachtwoord is niet correct, probeer het nogmaals</div>';
            header("Refresh: 2; url=./index.php?content=login");
        }

    } else {
        // e-mailadres is niet bekend in database, terugsturen naar het inlogormulier
        echo '<div class="alert alert-danger" role="alert">E-mail is niet bekend. Probeer het opnieuw.</div>';
        header("Refresh: 2; url=./index.php?content=login");
    }
?>