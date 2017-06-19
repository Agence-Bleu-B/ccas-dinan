<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>ACTUALITES</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
          <div class="container-fluid">
        		<div class="row">
              <div class="col-md-12">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th colspan="5">
                        Liste des actualités
                      </th>
                      <th>
                        <a href="#" class="btn btn-success" style="width: 100%;">
                          <span class="glyphicon glyphicon-plus"></span> Nouveau 
                        </a> 
                      </th>
                    </tr>
                    <tr>
                      <th style="width: 2%;">
                        #id
                      </th>
                      <th style="width: 40%;">
                        Titre
                      </th>
                      <th style="width: 8%;">
                        Date
                      </th>
                      <th style="width: 20%;">
                        Image
                      </th>
                      <th style="width: 20%;">
                        Cible
                      </th>
                      <th style="width: 10%;">
                        Commandes
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        TB - Monthly
                      </td>
                      <td>
                        01/04/2012
                      </td>
                      <td>
                        Default
                      </td>
                      <td>
                        Default
                      </td>
                      <td>
                        <a href="#" class="btn btn-primary" style="width: 100%; margin-bottom: 5px;">
                          <span class="glyphicon glyphicon-pencil"></span> Modifier 
                        </a>
                        <a href="#" class="btn btn-danger" style="width: 100%;">
                          <span class="glyphicon glyphicon-remove-circle"></span> Supprimer 
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <?php echo $pagination; ?>
              </div>
            </div>
          </div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>