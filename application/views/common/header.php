<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- BLOCK HEADER -->
<header class="container">

  <div class="row">
    <h1 class="col-xs-8 vertical-align-item">
      <a href="<?php echo site_url(); ?>">
        <img src="<?php echo img_url("LOGO_CCAS.png"); ?>" alt="">
      </a>
    </h1><!--
--><div class="col-xs-4 vertical-align-item">
       <?php if (isset($isPersonnelCo) and $isPersonnelCo): ?>
         <a href="<?php echo site_url('personnel?deco'); ?>" class="btn btn-default btn-lg pull-right"><i class="fa fa-sign-out" aria-hidden="true"></i> Se Déconnecter</a>
       <?php else: ?>
         <a href="<?php echo site_url('personnel'); ?>" class="btn btn-default btn-lg pull-right"><i class="fa fa-users" aria-hidden="true"></i> Personnel</a>
       <?php endif; ?>
    </div>
  </div>

  <?php $this->load->view('common/topMenu'); ?>

</header>
<!-- FIN BLOCK HEADER -->
