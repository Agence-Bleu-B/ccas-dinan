<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BLOCK CONTENT -->
<section id="content" class="container">

  <!-- SLIDER -->
  <?php $this->load->view('common/sliderMenu'); ?>

  <!-- MIETTES DE PAIN -->
  <ol class="breadcrumb row">
    <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
    <li class="active">En ce moment...</li>
  </ol>

  <section id="list_news">
    <div class="row">
      <h2>En ce moment...</h2>
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
        <div class="col-xs-1 hidden-xs">
          <img src="<?php echo img_url($news['couverture']); ?>" class="img-responsive">
        </div>
        <div class="col-xs-11">
          <h3><a href="<?php echo site_url('accueil/actualite/' . $news['id'] . '-' . str_replace(' ', '-', $news['titre'])) ?>"><?php echo $news['titre']; ?></a> <br><small><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $news['date']; ?></small></h3>
        </div>
      </div>
      <br>
    <?php endforeach; ?>

  </section>

</section>
<!-- FIN BLOCK CONTENT -->
