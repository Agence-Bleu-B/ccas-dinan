<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BLOCK CONTENT -->
<section id="content" class="container">

  <!-- MIETTES DE PAIN -->
  <ol class="breadcrumb row">
    <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
    <li class="active">Mon Espace</li>
  </ol>

  <section class="row">
    <h2>Mon Espace</h2>
    <div class="col-xs-12">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </section>
  <br>
  <section id="list_news">
    <div class="row">
      <h3>Actualités du personnel</h3>
      <br>
    </div>

    <!-- <div class="row">
      <div class="col-xs-1">
        <img src="http://placehold.it/50x50" class="img-responsive">
      </div>
      <div class="col-xs-11">
        <h3><a href="#">Titre actu</a> <br><small><i class="fa fa-calendar" aria-hidden="true"></i> 14/06/17</small></h3>
      </div>
    </div> -->

    <?php foreach ($news_liste as $news): ?>
      <div class="row">
        <div class="col-xs-1">
          <img src="<?php echo $news['couverture']; ?>" class="img-responsive">
        </div>
        <div class="col-xs-11">
          <h3><a href="#"><?php echo $news['titre']; ?></a> <br><small><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $news['date']; ?></small></h3>
        </div>
      </div>
      <br>
    <?php endforeach; ?>

  </section>

</section>
<!-- FIN BLOCK CONTENT -->
