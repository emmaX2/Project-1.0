<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php?content=home">Rent a Car</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php?content=home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Auto huren
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./index.php?content=bruiloft">Bruiloft</a>
          <a class="dropdown-item" href="./index.php?content=begrafenis">Begrafenis</a>
          <a class="dropdown-item" href="./index.php?content=speciaal">Speciale opdrachten</a>
          <li class="nav-item active">
          <li class="nav-item active">
        <a class="nav-link" href="./index.php?content=contact">Contact <span class="sr-only">(current)</span></a>
      </li>
        <a class="nav-link" href="./index.php?content=login">Aanmelden <span class="sr-only">(current)</span></a>
         </li>
        </div>
      </li>
    </ul>
   
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<?php 
            if ( isset($_SESSION["id"])){

              switch ($_SESSION["userrole"]) {
                case 'customer':
                  echo '<li class="nav-item">
                    <a id="active_customer_home" class="nav-link" href="index.php?content=home">Home</a>
                  </li>';
                  echo '
                  <li class="nav-item">
                  <a id="active_oefen" class="nav-link" href="index.php?content=autohuren">Auto huren</a>
                </li>';
                  echo '<li class="nav-item">
                    <a id="active_training" class="nav-link" href="index.php?content=contact">Contact</a>
                  </li>';
                break;
                case 'admin':
                  echo '<li class="nav-item">
                    <a id="active_admin_home" class="nav-link" href="index.php?content=home">Home</a>
                  </li>';
                  echo '
                  <li class="nav-item">
                  <a id="active_oefen" class="nav-link" href="index.php?content=autohuren">Auto huren</a>
                </li>';
                  echo '<li class="nav-item">
                    <a id="active_training" class="nav-link" href="index.php?content=contact">Contact</a>
                  </li>';
                break;
            }
              echo '<li class="nav-item">
                      <a id="active_logout" class="nav-link" href="index.php?content=logout">Log Uit</a>
                    </li>';
            } else{
              echo '
              <li class="nav-item">
              <a id="active_home" class="nav-link" href="index.php?content=home">Home</a>
            </li>';
            echo '
                  <li class="nav-item">
                  <a id="active_oefen" class="nav-link" href="index.php?content=auto">Onze auto\'s </a>
                </li>';
            echo '
              <li class="nav-item">
              <a id="active_login" class="nav-link" href="index.php?content=login">Aanmelden</a>
            </li>';
              echo '
              <li class="nav-item">
              <a id="active_contact" class="nav-link" href="index.php?content=contact">Contact</a>
            </li>';
            }
          ?>
        </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <span id="wit" class="nav-link"><?php if (isset($_SESSION['email'])) {echo "Welkom " . $_SESSION ["email"];}?></span>
          </form>
      </div>
    </nav>