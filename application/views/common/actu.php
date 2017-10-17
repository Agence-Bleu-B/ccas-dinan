<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- BLOCK CONTENT -->
<section id="content" class="container">

  <!-- SLIDER -->
  <?php //$this->load->view('common/sliderMenu'); ?>

  <!-- MIETTES DE PAIN -->
  <ol class="breadcrumb row">
    <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
    <?php if ($news['cible'] == 1): //check si news personnel ou pas ?>
      <li><a href="<?php echo site_url('personnel'); ?>">Mon espace</a></li>
    <?php else: ?>
      <li><a href="<?php echo site_url('accueil/actualites'); ?>">En ce moment...</a></li>
    <?php endif; ?>
    <li class="active"><?php echo $news['titre'] ?></li>
  </ol>

  <section class="row">
    <div class="col-xs-12">
      <h2><?php echo $news['titre'] ?> <small><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date('d/m/Y',$news['date']) ?></small></h2>
      <p><?php echo $news['text'] ?></p>
    </div>
  </section>

</section>
<!-- FIN BLOCK CONTENT -->
