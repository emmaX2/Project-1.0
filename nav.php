<nav class="navigatiebalk navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<?php 
            if ( isset($_SESSION["id"])){

              switch ($_SESSION["userrole"]) {
                case 'customer':
                  echo '<li class="nav-item">
                    <a id="active_customer_home" class="nav-link" href="index.php?content=home">Home</a>
                  </li>

                <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Auto huren
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./index.php?content=bruiloft">Bruiloft</a>
                  <a class="dropdown-item" href="./index.php?content=begrafenis">Begrafenis</a>
                  <a class="dropdown-item" href="./index.php?content=speciaal">Speciale opdrachten</a>
                </div>
              </li>
              <li class="nav-item">
                    <a id="active_training" class="nav-link" href="index.php?content=contact">Contact</a>
                  </li>';
                break;
                case 'admin':
                  echo '<li class="nav-item">
                    <a id="active_admin_home" class="nav-link" href="index.php?content=home">Home</a>
                  </li>
                  <li class="nav-item">
                  <a id="active_home" class="nav-link" href="index.php?content=home">Home</a>
                </li>
                <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Auto huren
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./index.php?content=bruiloft">Bruiloft</a>
                  <a class="dropdown-item" href="./index.php?content=begrafenis">Begrafenis</a>
                  <a class="dropdown-item" href="./index.php?content=speciaal">Speciale opdrachten</a>
                </div>
              </li>
              <li class="nav-item">
                    <a id="active_training" class="nav-link" href="index.php?content=contact">Contact</a>
                  </li>';
                break;
            }
              echo '<li class="nav-item">
                      <a id="active_logout" class="nav-link" href="index.php?content=logout">Log Uit</a>
                    </li>
                    <div class="main_menu">
                      <div class="logo_area">
                        <a href=""><img src="./img/logo.png" alt="pjedo" class="logo"></a>
                      </div>
                    </div>
                    ';
            } else{
              echo '
              <li class="nav-item">
              <a id="active_home" class="nav-link" href="index.php?content=home">Home</a>
            </li>
            <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Auto huren
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./index.php?content=bruiloft">Bruiloft</a>
              <a class="dropdown-item" href="./index.php?content=begrafenis">Begrafenis</a>
              <a class="dropdown-item" href="./index.php?content=speciaal">Speciale opdrachten</a>
            </div>
          </li>
              <li class="nav-item">
              <a id="active_login" class="nav-link" href="index.php?content=login">Aanmelden</a>
            </li>
              <li class="nav-item">
              <a id="active_contact" class="nav-link" href="index.php?content=contact">Contact</a>
            </li>
            <img src="./img/logo.png" alt="pjedo" class="logo">';
            }
          ?>
        </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <span id="wit" class="nav-link"><?php if (isset($_SESSION['email'])) {echo "Welkom " . $_SESSION ["email"];}?></span>
          </form>
      </div>
    </nav>