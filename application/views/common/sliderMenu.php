<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- SLIDER -->
<div class="row">
  <?php if (isset($news_banner)): ?> <!-- Si c'est une news (ou pasge avec banniere propre) -->
    <img class="img-responsive" src="<?php echo img_url("elements/newsBanner.png");?>" alt="">
  <?php else: ?> <!-- Sinon on affiche le menu slider -->
    <img class="img-responsive" src="http://placehold.it/1170x500" alt="">
  <?php endif; ?>
</div>
