<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>Nouvelle actualité</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
      		<form class="form-horizontal" method="post" action="">
            <fieldset>
            <!-- Multiple Radios (inline) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radios">Cible</label>
              <div class="col-md-4"> 
                <label class="radio-inline" for="radios-0">
                  <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
                  Personnel
                </label> 
                <label class="radio-inline" for="radios-1">
                  <input name="radios" id="radios-1" value="2" type="radio">
                  Publique
                </label>
              </div>
            </div>
            <!-- Textarea -->
            <div class="form-group">
              <div class="col-md-offset-1 col-md-10">                     
                <textarea class="form-control" id="textarea" name="text"></textarea>
              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <div class="col-md-offset-1 col-md-10">
                <button id="button1id" name="button1id" class="btn btn-success">Créer</button>
                <button id="button2id" name="button2id" class="btn btn-danger">Abandonner</button>
              </div>
            </div>

            </fieldset>
            </form>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>