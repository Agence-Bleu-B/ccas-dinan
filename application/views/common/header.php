<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- BLOCK HEADER -->
<header class="container">

  <div class="row">
    <h1 class="col-xs-7 vertical-align-item">
      <a href="<?php echo site_url(); ?>">
        <img src="<?php echo img_url("LOGO_CCAS.png"); ?>" alt="">
      </a>
    </h1><!--
--><div class="col-xs-12 col-sm-5 vertical-align-item">
       <?php if (isset($isPersonnelCo) and $isPersonnelCo): ?>
         <a href="<?php echo site_url('personnel?deco'); ?>" class="btn btn-default btn pull-right"><i class="fa fa-sign-out" aria-hidden="true"></i> Se Déconnecter</a>

         <a href="<?php echo site_url('personnel'); ?>" class="btn btn-default btn pull-right"><i class="fa fa-user" aria-hidden="true"></i> Mon Espace</a>
       <?php else: ?>
         <a href="<?php echo site_url('personnel'); ?>" class="btn btn-default btn-lg pull-right"><i class="fa fa-users" aria-hidden="true"></i> Accès Personnel</a>
       <?php endif; ?>
    </div>
    <br class="visible-xs-inline">
    <br class="visible-xs-inline">
  </div>

  <?php $this->load->view('common/topMenu'); ?>

</header>
<!-- FIN BLOCK HEADER -->
