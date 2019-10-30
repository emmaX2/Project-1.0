<section class="content">
    <?php 
        if (isset($_GET["content"])){
            include("./inlcudes/" . $_GET["content"] . ".php"); 
        }else{
            include("./home.php");
        }
    ?>
</section>