<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BLOCK CONTENT -->
<section id="content" class="container">
  <section class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <h2>Espace Personnel</h2>
      <form method="post" action="<?php echo site_url('personnel'); ?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Identifiant</label>
          <input type="text" name="login" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <a href="#" class="pull-right">Mot de passe oublié ?</a>
        <br>
        <button type="submit" name="val" class="btn btn-default">Connexion</button>
      </form>
    </div>
  </section>
  <br>
</section>
<!-- FIN BLOCK CONTENT -->
