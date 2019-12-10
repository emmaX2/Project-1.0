<!-- navbar -->
<style>
    #active_login{
        color: black;
    }
</style>

<!-- pagina -->

<div class="container">
<div class="row">

<!-- registreren -->
  <div id="inloggen" class="col-md-6"> 
    <form action="./index.php?content=register" method="post">
      <div class="form-group">
        <h1>Registeer</h1>
        <br>
        <label for="exampleInputEmail1">E-mailadres</label>
        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
          placeholder="Voer uw e-mailadres in..." name="email">
        <small id="emailHelp" class="form-text text-muted">Wij zullen nooit uw e-mailadres delen met anderen.</small>
      </div>
      <button type="submit" class="btn btn-primary">Registreer</button>
    </form><br>
  </div>
  <br>

  <!-- inloggen -->
  <div id="inloggen" class="col-md-6">
    <form action="./index.php?content=login_script" method="post">
      <div class="form-group">
        <h1>Inloggen</h1>
        <br>
        <label for="exampleInputEmail1">E-mailadres</label>
        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
          placeholder="Voer uw e-mailadres in..." name="email">
          <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Wachtwoord</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Voer uw wachtwoord in" name="password">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form><br>
  </div>
  <div class="col-6">
        <img src="./img/mini.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
    </div>
</div>
</div>