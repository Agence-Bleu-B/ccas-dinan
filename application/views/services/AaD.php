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
    <li class="active">Aide à Domicile</li>
  </ol>

  <section class="row">
    <div class="col-xs-12">
      <h2>Aide à Domicile</h2>
      <!-- script de déroulement des textes-->
					<script type="text/javascript">
						function afficherCacher(txt) {
							var test = document.getElementById(txt).style.display;
							if (test=="block") 
							{
								document.getElementById(txt).style.display = "none";
							}
							else
							{
								document.getElementById(txt).style.display = "block";
							}
						}

					</script>

     	<a href="#" onclick='afficherCacher("texte1");return false'><h4 class="page-header">1. Le Service d’Aide et d’Accompagnement à Domicile – Service Prestataire</h4></a> 
     	<div id="texte1" style="display:none;">
	     	<h5>Une aide à domicile du services perstataire, qu'est-ce que c'est ?</h5>
	     	<p>
	     		Vous habitez DINAN, vous et vos proches éprouvez des difficultés dans votre vie quotidienne. Les auxiliaires de vie employées par le CCAS peuvent vous aider à votre domicile de façon ponctuelle ou permanente. Notre service se charge de tout.
	     	</p>
	     	<h5>Qui est concerné ?</h5>
	     	<ul class="check_cond">
	     		<li>Les personnes âgées de plus de 60 ans fragiles et/ou isolées</li>
	     		<li>Les personnes âgées en perte d’autonomie</li>
	     		<li>Les personnes en situation de handicap</li>
	     		<li>Les personnes en difficulté sociale</li>
	     		<li>Les personnes fragilisées après une hospitalisation</li>
	     	</ul>
	     	<h5>En quoi pouvons-nous vous aider ?</h5>
	     	<ul class="check_cond">
	     		<li><u>L’entretien de votre cadre de vie:</u> faire votre ménage, votre lessive, votre repassage, l’entretien de vos carreaux,… </li>
	     		<li><u>L’accompagnement dans les actes de la vie courante:</u> assurer les levers et les couchers, préparer vos repas, vous aider pour votre toilette, vous aider pour vous habiller, faire vos courses, réaliser avec vous vos démarches administratives.</li>
	     		<li><u>Le maintien du lien social:</u> vous accompagner dans les commerces de votre choix, chez vos intervenants médicaux, assurer le relais de votre conjoint ou de votre parent pour ses activités, vous accompagner pour des sorties.</li>
	     		<li><u>Le soutien et le réconfort:</u> vous assurez une présence bienveillante, un temps d’écoute et de convivialité, organiser vos loisirs et des temps d’animations.</li>
	     		<li><u>Une surveillance à distance:</u> Nos services pourront vous renseigner sur l’installation d’un dispositif de téléassistance, pour sécuriser vos nuits et vos moments de solitude.</li>
	     	</ul>
	     	<h5>Comment pouvons-nous intervenir ?</h5>
	     	<ul class="check_cond">
	     		<li><strong>Evaluer vos besoins:</strong> Votre demande d’accompagnement fera l’objet d’une évaluation à votre domicile par la responsable du service pour adapter au mieux les interventions à vos besoins. Cette visite pourra être concomitante avec celle du Conseil Départemental ou de votre caisse de retraite en fonction des modalités de financement que vous aurez sollicité.</li>
	     		<li><strong>Vous proposer du personnel qualifié et compétent:</strong> la majorité de nos professionnels sont titulaires d’un diplôme relatif à l’accompagnement des personnes fragilisés (exemple : diplôme d’auxiliaire de vie sociale). Ils bénéficient également d’un programme de formation continue destiné à renforcer leurs compétences. </li>
	     		<li><strong>Déployer nos moyens à votre domicile:</strong> nos équipes peuvent intervenir tous les jours de la semaine, y compris les dimanches et jours fériés. Nous mettons à votre disposition du personnel de 07h30 à 21h00 et assurons la continuité du service en cas d’absence de vos intervenants habituels (congés, formation, maladie). Les interventions s’effectuent en votre présence, selon un planning établie à l’avance selon vos besoins, vos souhaits et nos disponibilités. Vous êtes immédiatement informés de tout changement.</li>
	     	</ul>
	     	<h5>Quels sonts les tarifs et les financements possibles ?</h5>
	     	<p>
	     		Au 1er janvier 2017, le tarif horaire du CCAS est de 22,93 € (fixé par arrêté du Conseil Départemental).
	     	</p>
	     	<p>
				En fonction de votre situation, vous pouvez peut-être bénéficier d’une prise en charge financière :
	     	</p>
	     	<ul class="check_cond">
	     		<li><strong>Vous êtes retraités:</strong> votre caisse de retraite principale peut participer au financement du coût horaire de l’aide à domicile jusqu’à un certain montant, le Conseil Départemental peut prendre en charge l’intégralité du coût horaire au titre de l’Allocation Personnalisée Autonomie (APA) ou de l’Aide Sociale</li>
	     		<li><strong>Vous êtes en situation de handicap:</strong> la CAF ou la MSA peut vous aider au titre de la Prestation de Compensation du Handicap (PCH)</li>
				<li><strong>Vous êtes hospitalisés:</strong> votre mutuelle ou votre assurance peut prendre en charge une aide à domicile pendant la période de votre convalescence </li>     	
	     	</ul>
	     	<p>
	     		Vous pouvez procéder aux règlements par tout moyen de paiement : virement, chèques bancaire, tickets CESU, ainsi qu’espèces et carte bancaire directement au guichet du trésor public.
	     	</p>
	     	<p>
	     		L’emploi d’une aide à domicile vous permet de bénéficier d’une déduction d’impôts selon votre situation et la réglementation en vigueur. 
	     	</p>

	     	<h5>Quelles sont les démarches à effectuer ?</h5>
	     	<ul class="check_cond">
	     		<li>Vous êtes invités à contacter le service, soit par téléphone ou directement dans les locaux du CCAS. </li>
	     		<li>Un rendez-vous vous sera proposé à votre domicile pour évaluer vos besoins et déterminer la nature, la durée et la fréquence des interventions de votre aide à domicile</li>
	     		<li>Un contrat vous sera adressé par courrier pour confirmer votre engagement. Il sera accompagné du règlement intérieur et des conditions générales d’interventions. Ces documents seront à nous ré-adresser signés par vos soins. En cas de difficulté, nous effectuerons une seconde visite pour les récupérer.</li>
	     		<li>A réception des documents, nous établirons le planning des intervenants que nous vous adresserons par courrier. Nous déclencherons l’intervention dans les jours qui suivent selon les modalités convenus.</li>
	     		<li>A la fin de chaque mois, le service administratif contrôle les heures effectuées et établie une facturation. En fin d’année, une attestation fiscale vous sera remise.</li>
	     	</ul>
	     	<a href="#">Livret accueil</a>
	     </div>

     	<a href="#" onclick='afficherCacher("texte2");return false'><h4 class="page-header">2. Aides à domicile - Service Mandataire, Aide à la Fonction employeur </h4></a>
     	<div id="texte2" style="display:none;">
	     	<h5>Une aide a domicile du services mandataires, qu'est-ce que c'est ?</h5>
	     	<p>
	     		Vous habitez la région de DINAN et vous recherchez une personne pour vous aider au quotidien à domicile. Vous souhaitez être conseillés dans vos formalités administratives et dans vos choix de recrutement en fonction de vos besoins. Les services du CCAS peuvent vous accompagner dans votre démarche tout en vous permettant de rester l’employeur direct de votre aide à domicile.
	     	</p>
	     	<h5>Qui est concerné ?</h5>
	     	<p>
	     		Toute personne désireuse d’employer du personnel à domicile et étant en capacité d’être employeur. Il n’y a pas de conditions de ressources.
	     	</p>
	     	<h5>En quoi les aides à domicile peuvent-elles vous aider ?</h5>
	     	<ul class="check_cond">
	     		<li><u>L’entretien de votre cadre de vie:</u> faire votre ménage, votre lessive, votre repassage, l’entretien de vos carreaux,… </li>
	     		<li><u>L’accompagnement dans les actes de la vie courante:</u> assurer les levers et les couchers, préparer vos repas, vous aider pour votre toilette, vous aider pour vous habiller, faire vos courses, réaliser avec vous vos démarches administratives.</li>
	     		<li><u>Le maintien du lien social:</u> vous accompagner dans les commerces de votre choix, chez vos intervenants médicaux, assurer le relais de votre conjoint ou de votre parent pour ses activités, vous accompagner pour des sorties.</li>
	     		<li><u>Le soutien et le réconfort:</u> vous assurez une présence bienveillante, un temps d’écoute et de convivialité, organiser vos loisirs et des temps d’animations.</li>
	     		<li><u>Une surveillance à distance:</u> Nos services pourront vous renseigner sur l’installation d’un dispositif de téléassistance, pour sécuriser vos nuits et vos moments de solitude.</li>
	     	</ul>
	     	<h5>Comment le CCAS intervient-il ?</h5>
	     	<ul class="check_cond">
	     		<li>Pour rechercher du personnel correspondant à vos besoins et vous mettre en relation</li>
	     		<li>Pour élaborer le contrat de travail et ses avenants</li>
	     		<li>Pour élaborer les fiches de paies</li>
	     		<li>Pour rédiger les demandes d’exonération et suivre les appels à cotisations</li>
	     		<li>Pour faire les déclarations à l’URSSAF, à POLE EMPLOI, à la caisse de prévoyance, à la sécurité sociale</li>
	     		<li>Pour vous assurer de personnel de remplacements en cas d’absence du salarié (arrêt maladie, congés)</li>
	     		
	     	</ul>
	     	<h5>Quels sont les tarifs ?</h5>
	     	<p>
	     		Vous versez à votre salarié un salaire mensuel. Il s’appuie sur le tarif horaire de base défini par la convention collective nationale du particulier employeur. Au 1er janvier 2017, le montant horaire brut est de 8,25 € minimum, auxquels s’ajoutent les charges salariales et patronales.
	     	</p>
	     	<p>
	     		Si vous le souhaitez, vous avez la faculté de rémunérer votre salarié sur montant supérieur.
	     	</p>
	     	<p>
	     		Le CCAS vous facturera en sus des frais de gestion correspondant à 0,17 € de l’heure. Une facturation mensuelle vous sera adressée. Vous serez invités à la régler au Trésor Public selon les modalités de votre choix. Une attestation fiscale
	     	</p>
	     	<p>
	     		L’emploi d’une aide à domicile vous permet de bénéficier d’une déduction d’impôts selon votre situation et la réglementation en vigueur. Une attestation fiscale vous sera remise en fin d’année.
	     	</p>
	     	<p>
	     		Vous vous engagez au minimum pour une heure d’intervention par semaine. 
	     	</p>
	     	<h5>Quelles sont les démarches à effectuer ?</h5>
	     	<p>
	     		Contactez le CCAS service mandataire pour vous aider à trouver la personne la mieux adaptées à vos besoins
	     	</p>
	     </div>
     </div>
  </section>

</section>
<!-- FIN BLOCK CONTENT -->
