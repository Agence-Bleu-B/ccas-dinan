<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>ACCUEIL ADMINISTRATION</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
      		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          		<div class="div-square">
	               	<a href="<?php echo site_url('admin/actu'); ?>" >
						<i class="fa fa-newspaper-o fa-5x"></i>
	          			<h4>Actualités</h4>
	          		</a>
          		</div>
          	</div>
          	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          		<div class="div-square">
	               	<a href="<?php echo site_url('admin/gestionpersonnel'); ?>" >
						<i class="fa fa-users fa-5x"></i>
	          			<h4>Personnel CCAS</h4>
	          		</a>
          		</div>
          	</div>
          	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          		<div class="div-square">
	               	<a href="blank.html" >
						<i class="fa fa-bar-chart-o fa-5x"></i>
	          			<h4>Statistiques</h4>
	          		</a>
          		</div>
          	</div>
          	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          		<div class="div-square">
	               	<a href="blank.html" >
						<i class="fa fa-edit fa-5x"></i>
	          			<h4>Pages</h4>
	          		</a>
          		</div>
          	</div>
          	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          		<div class="div-square">
	               	<a href="<?php echo site_url('admin/documents'); ?>" >
						<i class="fa fa-book fa-5x"></i>
	          			<h4>Documents</h4>
	          		</a>
          		</div>
          	</div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>