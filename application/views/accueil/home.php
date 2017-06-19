<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BLOCK CONTENT -->
<section id="content" class="container">

  <!-- SLIDER -->
  <?php $this->load->view('common/sliderMenu'); ?>

  <!-- MIETTES DE PAIN -->
  <ol class="breadcrumb row">
    <li class="active">Accueil</li>
  </ol>

  <section class="row">

    <div class="col-xs-12 col-md-4 col-md-push-8">
      <div class="news">
        <h2>En ce moment...</h2>
        <ul class="">
          <li><a href="#">news 1</a></li>
          <li><a href="#">news 2</a></li>
          <li><a href="#">news 3</a></li>
          <li><a href="#">news 4</a></li>
          <li>...</li>
        </ul>
      </div>
    </div>
    <div class="col-xs-6 col-md-4 col-md-pull-4 accent accent-1">
      <img class="img-responsive" src="<?php echo img_url("fotolia_110916723.jpg"); ?>" alt="">
      <a href="#"><h2>Action Sociale</h2></a>
    </div>
    <div class="col-xs-6 col-md-4 col-md-pull-4 accent accent-2">
      <img class="img-responsive" src="<?php echo img_url("fotolia_145906629.jpg"); ?>" alt="">
      <a href="#"><h2>Aide à Domicile</h2></a>
    </div>

    <div class="clearfix"></div>
    <br>

    <div class="col-xs-6 col-md-4 accent accent-3">
      <img class="img-responsive" src="<?php echo img_url("fotolia_101840258.jpg"); ?>" alt="">
      <a href="#"><h2>EHPAD</h2></a>
    </div>
    <div class="col-xs-6 col-md-4 accent accent-4">
      <img class="img-responsive" src="<?php echo img_url("fotolia_65076151-2.jpg"); ?>" alt="">
      <a href="#"><h2>Hebergement <br>D'Urgence</h2></a>
    </div>
    <div class="col-xs-12 hidden-md hidden-lg">
      <br>
    </div>
    <div class="col-xs-6 col-md-4 accent accent-5">
      <img class="img-responsive" src="<?php echo img_url("fotolia_150161025.jpg"); ?>" alt="">
      <a href="#"><h2>Portage de Repas</h2></a>
    </div>
  </section>

</section>
<!-- FIN BLOCK CONTENT -->
