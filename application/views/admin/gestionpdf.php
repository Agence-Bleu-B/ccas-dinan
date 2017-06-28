<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>GESTION PDF</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
      		<div class="col-md-12">
                <form method="post" action="<?php echo site_url('admin/gestionpdf'); ?>" enctype="multipart/form-data">
                  <input type="file" name="file" class="btn btn-default">
                  <input type="submit" name="upload" class="btn btn-default" >
                </form>
                <?php if(isset($message)){echo $message;}if(isset($message2)){print_r($message2) ;}   ?>
          </div>
          	
      	</div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>