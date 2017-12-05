<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BLOCK CONTENT -->
<section id="content" class="container">

  <!-- SLIDER -->
  <?php //$this->load->view('common/sliderMenu'); ?>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <a href="<?php echo site_url("services/action_sociales") ?>"><img src="<?php echo img_url("slider-solidarite-action-sociale") ?>" alt="..."></a>
          <div class="carousel-caption">
            Action Social
          </div>
        </div>

        <div class="item">
          <a href="<?php echo site_url("services/aides_a_domicile") ?>"><img src="<?php echo img_url("slider-aides-a-domicile") ?>" alt="..."></a>
          <div class="carousel-caption">
            Aides à domicile
          </div>
        </div>
        
         <div class="item">
          <a href="<?php echo site_url("services/ehpad") ?>"><img src="<?php echo img_url("slider-EHPAD-maison-de-retraite") ?>" alt="..."></a>
          <div class="carousel-caption">
            EHPAD
          </div>
        </div>
           
          <div class="item">
          <a href="<?php echo site_url("services/hebergement_durgence") ?>"><img src="<?php echo img_url("slider-hebergement-urgence") ?>" alt="..."></a>
          <div class="carousel-caption">
            Hébergement d'Urgence
          </div>
          </div>


          <div class="item">
          <a href="<?php echo site_url("services/portage_de_repas") ?>"><img src="<?php echo img_url("slider-portage-repas") ?>" alt="..."></a>
          <div class="carousel-caption">
            Portage de repas
          </div>
          </div>



      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <!-- MIETTES DE PAIN -->
  <ol class="breadcrumb row">
    <li class="active">Accueil</li>
  </ol>

 <section class="row">

    <div class="col-xs-12 col-md-4 col-md-push-8"  >
      <h4>En ce moment : </h4>
      <?php
          $nb_news = count($news_liste); //limite de 2 news
          if ($nb_news > 2) {
            $nb_news = 2;
          }
          for($i=0; $i<$nb_news; $i++){?>
            
             <div class="media">

              <div class="media-left media-middle" >
                <a href="#"> <img class="media-object" style="width:64px;height:64px;" src="<?php echo img_url($news_liste[$i]['couverture']) ?>" alt="..."></a>
              </div>

              <div class="media-body">
                <h4 class="media-heading"><a href="<?php echo site_url('accueil/actualite/' . $news_liste[$i]['id'] . '-' . str_replace(' ', '-', $news_liste[$i]['titre'])) ?>"><?php echo $news_liste[$i]['titre'] ?></a> </h4>
                <i class="fa fa-calendar" aria-hidden="true"></i><?php echo " ".$news_liste[$i]['date']; ?> 
              </div>
            </div>


          <?php }?>

          <div class="media">
              <a href="<?php echo site_url('accueil/actualites'); ?>">Voir toutes les actualités...</a>
          </div>
        
      <br>
    </div>


    <div class="col-xs-6 col-md-4 col-md-pull-4 accent accent-1">
      <a href="<?php echo site_url('services/action_sociales'); ?>">
        <img class="img-responsive" src="<?php echo img_url("raccourcis-slider-solidarite-action-sociale.png"); ?>" alt="">
        <h2>Action Sociale</h2>
      </a>
    </div>
    <div class="col-xs-6 col-md-4 col-md-pull-4 accent accent-2">
      <a href="<?php echo site_url('services/aides_a_domicile'); ?>">
        <img class="img-responsive" src="<?php echo img_url("raccourcis-service-aide-a-domicile.png"); ?>" alt="">
        <h2>Aide à Domicile</h2>
      </a>
    </div>

    <div class="clearfix"></div>
    <br>

    <div class="col-xs-6 col-md-4 accent accent-3">
      <a href="<?php echo site_url('services/ehpad'); ?>">
        <img class="img-responsive" src="<?php echo img_url("raccourcis-EHPAD-residence-blanchot.png"); ?>" alt="">
        <h2>EHPAD</h2>
      </a>
    </div>
    <div class="col-xs-6 col-md-4 accent accent-4">
      <a href="<?php echo site_url('services/hebergement_durgence'); ?>">
        <img class="img-responsive" src="<?php echo img_url("raccourcis-hebergement-urgence"); ?>" alt="">
        <h2>Hebergement <br>D'Urgence</h2>
      </a>
    </div>
    <div class="col-xs-12 hidden-md hidden-lg">
      <br>
    </div>
    <div class="col-xs-6 col-md-4 accent accent-5">
      <a href="<?php echo site_url('services/portage_de_repas'); ?>">
        <img class="img-responsive" src="<?php echo img_url("raccourcis-portage-repas.png"); ?>" alt="">
        <h2>Portage de Repas</h2>
      </a>
    </div>
  </section>
  </br>

  <!--Mot du président-->

  <section class="row ">
    <h3 class="page-header">Mot du président</h3>
    <p class="col-md-7 jumbotron">
      DINAN est la ville centre de la nouvelle agglomération. Elle reste pourtant à taille humaine, proche de ses habitants, soucieuse de leur sécurité et de leur bien être. Face aux aléas de la vie, nos concitoyens les plus vulnérables, qu’ils soient âgés, en situation de handicap, de précarité ou d’exclusion, peuvent trouver un soutien.
Au plus prêt de la population Dinannaise, le Centre Communal d’Action Sociale met en œuvre la politique sociale définie par la ville de DINAN. Il développe des activités et des actions destinées à assister et soutenir les personnes en difficulté. Il assure l’accueil du public, instruit les dossiers d’accès aux droits sociaux, et oriente vers les institutions adaptées. Il développe des services d’aide à domicile ou des solutions d’hébergement. En cas de besoin, il propose des aides financières ou matériels, et reste toujours disponible pour une écoute et un soutien.
Au cœur d’un réseau d’acteurs de la solidarité, les élus et les professionnels du CCAS sont pleinement mobilisés pour accompagner nos concitoyens fragilisés, souffrant ou démunis.
Je souhaite que ce site internet vous permette d’accéder à toutes les informations utiles, et qu’il puisse au final vous aider dans vos démarches. Les élus et les professionnels resteront toujours à votre disposition pour vous recevoir si vous le souhaitez…
    </p>
    <figure class="col-md-offset-1 col-md-4">
     <img  class="img-responsive"  src="<?php echo img_url("Capture-president.png"); ?>">
     <figcaption id="credit_photo">©Spoon Production</figcaption>
     <figcaption>Monsieur Didier LECHIEN, Maire de DINAN et Président du CCAS</figcaption>
    </figure>
   
  </section>


</section>
<!-- FIN BLOCK CONTENT -->
