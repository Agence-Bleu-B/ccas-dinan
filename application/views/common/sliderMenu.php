<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- SLIDER -->
<div id="slider" class="row">
  <?php if (isset($news['couverture'])): ?> <!-- Si c'est une news (ou pasge avec banniere propre) -->
    <img class="img-responsive center-block" src="<?php echo img_url($news['couverture']);?>" alt="">
  <?php else: ?> <!-- Sinon on affiche le menu slider -->
    <img class="img-responsive center-block" src="http://placehold.it/1170x500" alt="">
  <?php endif; ?>
</div>
