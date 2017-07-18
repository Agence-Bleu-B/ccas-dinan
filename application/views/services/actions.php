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
    <li>Services</li>
    <li class="active">Action Sociale</li>
  </ol>

  <section class="row">
    <div class="col-md-12">
			<h3>
				Action Sociale
			</h3>
			<div class="row">
				<div class="col-md-4">
					<iframe width="100%" height="350" src="https://www.youtube.com/embed/f_oEovxpf8s" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-8">
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h4>Horaires</h4>
					<p>du lundi au jeudi : 8h/12h,14h/18h</p>
					<p>vendredi : 8h/12h</p>
					<p>samedi/dimanche : fermé</p>
					<h4>Adresse</h4>
					<p>lorem ipsum</p>
					<p>22000</p>
					<p>dinan</p>
					<h4>Contacts</h4>
					<p>02 20 20 20 20</p>
				</div>
				<div class="col-md-4">
					<img class="img-responsive" alt="Bootstrap Image Preview" src="http://lorempixel.com/400/350/" />
				</div>
				<div class="col-md-4">
					<img class="img-responsive" alt="Bootstrap Image Preview" src="http://lorempixel.com/400/350/" />
				</div>
			</div>
		</div>
  </section>

</section>
<!-- FIN BLOCK CONTENT -->
