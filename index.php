<?php ob_start(); session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- De browser titel met bijbehorende icoon in de style van de website -->
    <link rel="icon" type="image/ico" href="img/car.png"/>
    <title>Rent a Car</title>
</head>
<body>
    <h1>hallo</h1>
     <!-- navbar -->
     <?php include("./includes/nav.php"); ?>
    <!-- banner -->
    <?php include("./includes/banner.php"); ?>
<br>
    <main class="container" id="main">
      <div class="row">
        <div class="col-12">
        <?php include("./includes/pageloader.php"); ?></div>
      </div>
    </main>

    <!-- footer -->
    <?php include("./includes/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
  </body>

</html>