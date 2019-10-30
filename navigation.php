<section class="content">
    <?php 
       if(isset($_GET["content"])){
           include("./includes/" .$_GET["content"] . ".php");
       }else{
           include("./includes/home.php");
       }
       ?>
</section>