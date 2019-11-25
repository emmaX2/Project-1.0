<!-- navbar -->
<style>
    #active_logout{
        color: black;
    }
</style>

<!-- pagina -->
<?php 
    session_unset();

    session_destroy();

    echo '<div class="alert alert-success" role="alert">U bent sucsessvol uitgelogd</div>';
    header("Refresh: 2; url=./index.php?content=home");
    exit();
?>