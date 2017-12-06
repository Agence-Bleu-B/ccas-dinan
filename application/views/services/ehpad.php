<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- BLOCK CONTENT -->
<section id="content" class="container">

  <!-- SLIDER -->
  <?php //$this->load->view('common/sliderMenu'); ?>

  <!-- MIETTES DE PAIN -->
  <ol class="breadcrumb row">
    <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
    <li>Services</li>
    <li class="active">EHPAD</li>
  </ol>

  <section class="row">
    <div class="col-xs-12 listetxt">
    <a href="<?php echo site_url('accueil/doc'); ?>" class="btn btn-default btn-lg pull-right"><i class="fa fa-file" aria-hidden="true"></i> Documents à télécharger</a>
    <!-- script de déroulement des textes-->
          <script type="text/javascript">
            function afficherCacher(txt,fleche) {
              
              var test = document.getElementById(txt).style.display;
              if (test=="block") 
              {
                document.getElementById(txt).style.display = "none";
                document.getElementById(fleche).classList.replace("fa-caret-up","fa-caret-down");

              }
              else
              {
                document.getElementById(txt).style.display = "block";
                document.getElementById(fleche).classList.replace("fa-caret-down","fa-caret-up");
              }
            }

          </script>
      <h2>EHPAD</h2>
      <a href="#" onclick='afficherCacher("texte1","fleche10");return false'><h4 class="page-header titre3">UN ETABLISSEMENT POUR PERSONNES AGEES DEPENDANTES (EHPAD) <i id="fleche10" class="fa fa-caret-down" aria-hidden="true"></i></h4></a>
      <div id="texte1" style="display:none;">
        <h5>Qu'est-ce que c'est ?</h5>
        <p>
          Depuis 2002, les établissements ne sont plus définis selon un statut juridique (Foyer Logement, MAPA, Maison de Retraite). Deux catégories d’établissements sont proposées aux personnes âgées : les EHPAD, destinés aux personnes présentant une faible autonomie, et les EHPA ou Résidence Autonomie, destinées aux personnes plus valides.
          Dans les EHPAD, les résidents bénéficient de services et de personnel destinés à assurer l’accomplissement des actes de la vie courante : aide à la toilette, à l’habillage, à la prise des repas,…
        </p>
        <h5>Qui est concerné ?</h5>
        <p>
          Toutes les personnes âgées de plus de 60 ans (sauf dérogation du Conseil Départemental),  présentant des difficultés de maintien à domicile et nécessitant de l’aide à l’accomplissement des actes de la vie courante.
        </p>
      </div>


      <a href="#" onclick='afficherCacher("texte2","fleche11");return false'><h4 class="page-header titre3">LA SPECIFICITE DE L’EHPAD GERE PAR LE CCAS DE DINAN <i id="fleche11" class="fa fa-caret-down" aria-hidden="true"></i></h4></a>
      <div id="texte2" style="display:none;">
        <h5><u>la résidence Yves Blanchot</u></h5>
        <p>
          L’établissement est situé au cœur de la vieille ville de Dinan, ville d’art et d’histoire, très touristique et animée. Proche de la Basilique Saint-Sauveur, des commerces et des animations du centre-ville, la Résidence est à proximité immédiate du Jardin Anglais qui offre une magnifique promenade et une vue imprenable sur la Vallée de la Rance, le petit Port et le Viaduc. 
        </p>
        <p>
          La capacité d’accueil est de 64 lits d’hébergement dont 2 places d’accueil temporaire.
          Suite aux importants travaux de remise aux normes, d’extension, et d’embellissement la Résidence dispose de locaux clairs, agréables, sécurisés et adaptés.
        </p>

        <h5>L’accompagnement et les soins du quotidien</h5>
        <div class="row">
          <div class="col-md-6">
            <p>
              Une équipe  pluridisciplinaire vous accompagne au quotidien en respectant vos choix et en répondant de la manière la plus adaptée à vos besoins et souhaits : soins médicaux et infirmiers, aide à la toilette et à l’habillage, aide au repas, entretien de votre chambre... 
              Ainsi, les professionnels  interviennent près de vous, de manière attentive, dans le respect de vos habitudes de vie, en favorisant le maintien de votre autonomie et de vos liens familiaux, amicaux et sociaux. 
              Le personnel soignant intervient sous la supervision d’une infirmière coordinatrice, et d’un médecin coordonnateur présent une journée par semaine.
            </p>
            <p>
              Vous conservez le libre choix de votre médecin traitant ainsi que des intervenants extérieurs paramédicaux (kinésithérapeutes, pédicures-podologues, dentistes…)
              Dans le cadre de la dotation globale de soins, l’ensemble des soins est pris en charge par l’établissement (visites de médecins, actes de kinésithérapie, actes de biologie, actes d’orthophonie, actes de radiologies à l’exception des scanners et IRM).
              La psychologue rencontre les résidents et les familles à leur demande.
            </p>

            <p>
              Une permanence est présente chaque mardi toute la journée. Elle participe à l’élaboration des projets de vie individuels et administrative est assurée du lundi au vendredi de 8H15 à 12H15 et de 13H15 à 17H15. 
              Un agent de maintenance assure l’entretien des locaux et du matériel, effectue les dépannages éventuels dans les locaux collectifs et les appartements.
            </p>

          </div>
        </div>

        <h5>Les locaux et lieux de vie</h5>
        <div class="row">
          <div class="col-md-6">
            <p>
              L’établissement dispose d’un vaste salon dédié au repos, à l’animation et aux rencontres. Une animatrice est présente du lundi au vendredi. Elle propose la lecture du journal chaque matin, une sortie hebdomadaire à la médiathèque, des sorties extérieures, des après-midi dédiées à la danse et à la musique, des activités manuelles, des jeux de société. Les temps d’animation sont également proposés par l’équipe soignante en début d’après-midi : chorale, gymnastique, soins esthétiques… L’établissement dispose d’un minibus adapté au transport des personnes à mobilité réduite.
            </p>
            <p>
              La Résidence dispose  d’un espace bien-être mis à disposition des coiffeuses à domicile, des familles et du personnel pour les soins esthétiques ainsi que d’un espace de balnéothérapie.
            </p>
          </div>
        </div>

        <h5>Les appartements privatifs</h5>
        <div class="row">
          <div class="col-md-6">
            <p>
              La Résidence dispose de 64 chambres individuelles d’une superficie d’environ 30m².  Chaque logement est équipé d’un lit médicalisé, de placards intégrés, d’une table adaptable, d’une prise d’antenne TV et d’une salle d’eau privative (lavabo, douche de plein pied, chaise de douche et WC). Les Résidents apportent leur propre mobilier et personnalisent leur appartement afin de recréer « un chez soi » au sein duquel leur intimité est préservée. 
            </p>
            <p>
              Les logements sont tous équipés d’un système d’appel malade, d’une ligne téléphonique privative, d’une prise TV et d’une connexion wifi. 
            </p>

          </div>
        </div>

        <h5>Un Restaurant accueillant et chaleureux </h5>
        <div class="row">
          <div class="col-md-6">
            <p>
              L’équipe de cuisine prépare chaque jour les repas servis à l’assiette au restaurant. Les menus sont élaborés selon un plan alimentaire validé par une diététicienne. Une attention est portée aux goûts des Résidents dans le respect des régimes spécifiques et des textures (aliments mixés ou textures modifiées). Il est possible d’inviter les personnes de son choix pour le déjeuner en réservant 24 heures à l’avance minimum. 
            </p>
            <p>
              Le petit-déjeuner est proposé en chambre soit en autonomie, soit servi par le personnel de la Résidence. 
            </p>
          </div>
        </div>

        <h5>La gestion du linge</h5>
        <div class="row">
          <div class="col-md-6">
            <p>
              L’établissement assure le traitement du linge personnel des Résidents (lavage, repassage, distribution) et fourni le linge plats (draps, serviettes de toilette, serviette des table).
              Un service de marquage du linge est également assuré par la responsable de la lingerie. 
            </p>
          </div>
          
        </div>

        <h5>Les extérieurs</h5>
        <div class="row">
          <div class="col-md-6">
            <p>
              L’établissement se trouvant en plein cœur historique de la ville de Dinan, les espaces extérieurs sont limités. Toutefois, une terrasse offrant lieux de repos, parcours de marche et jardin de senteurs est aménagée au 1er étage. Un projet de parcours d’activités sportives pour séniors est en cours. 
            </p>
          </div>
          
        </div>

        <p>
          Plaquette EHPAD
          Protocole n° 10 Bis  Admission, Accueil et projets personnalisé
          Tarifs Hébergements
        </p>

      </div>
    </div>
  </section>

</section>
<!-- FIN BLOCK CONTENT -->
