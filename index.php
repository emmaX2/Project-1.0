<?php ob_start(); session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
    <link href="./css/style.css" rel="stylesheet">

    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ca700319b272f00119abdc8&product=social-analytics' async='async'></script>
    <!-- De browser titel met bijbehorende icoon in de style van de website -->
    <link rel="icon" type="image/ico" href="img/logo.png"/>
    <title>Rent a Car</title>
</head>
<body>

    <!-- De navbar -->
     <div class="row">
     <div class="col-12"> <?php include("./nav.php"); ?>
     </div>
     </div>

     <!-- de content -->
     <div class="navspot row">
     <div class="col-12"> <?php include("./navigation.php"); ?>
     </div>
     </div>

    <!-- footer -->
    <div class="row">
     <div class="col-12"> <?php include("./footer.php"); ?>
     </div>
     </div>
  
   
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