<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- BLOCK CONTENT -->
<section id="content" class="container">

  <!-- SLIDER -->
  <?php
 
   //$this->load->view('common/sliderMenu'); ?>

  <!-- MIETTES DE PAIN -->
  <ol class="breadcrumb row">
    <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
    <li>Services</li>
    <li class="active">Action Sociale</li>
  </ol>

  <section class="row">

    <div class="col-md-12 listetxt">
    		<a href="<?php echo site_url('personnel'); ?>" class="btn btn-default btn-lg pull-right"><i class="fa fa-file" aria-hidden="true"></i> Formulaires d'aides financières</a>
			<h3>
				Action Sociale
			</h3>
			<!--<div class="row">
				<div class="col-md-4">
					<iframe width="100%" height="350" src="https://www.youtube.com/embed/f_oEovxpf8s" frameborder="0" allowfullscreen></iframe>
				</div>
			-->



				<div class="col-md-12">
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
						<a href="#" onclick='afficherCacher("texte1");return false'><h4 class="page-header titre1">1. LES PUBLICS AIDES</h4></a>
						<div id="texte1" style="display:none;">
							<p>
								Le CCAS reçoit une grande diversité de publics avec des problématiques et des besoins parfois très différents. Si vous habitez DINAN et que vous éprouvez des difficultés matérielles, sociales ou financières, nous pouvons vous aider.  
							
							</p>
							<p>
								Nous assurons votre accueil que vous soyez une personne âgée, une personne en situation de handicap, un jeune retraité, un étudiant, un jeune en insertion, une famille, une personne isolée (avec ou sans enfant), une personne sans domicile fixe, un demandeur d’asile, ou tout simplement une personne qui souhaitent être aidée, conseillée ou orientée…
							
							</p>
							<p>
								Nous vous informerons sur vos droits en matière de ressources, de santé et d’aide sociale, et nous pourrons vous proposer le cas échéant des secours pour vous aider à faire face à un imprévu ou une difficulté momentanée. Nous disposons également de services d’aide à domicile et de solution d’hébergement pour assurer votre confort et votre sécurité.
						
							</p>
							
						</div>
						

						<a href="#" onclick='afficherCacher("texte2");return false'><h4 class="page-header titre2">2. LES REVENUS DE SOLIDARITE LE SOUTIEN A L’AUTONOMIE FINANCIERE</h4></a>
							<div id="texte2" style="display:none;">
								
								<h5>Le Revenu de Solidarité Active (R.S.A.)</h5>
									<p>
										Vous avez plus de 25 ans et vous résidez en France de manière stable et effective. Vous n’êtes pas étudiant, en congé (parental, sabbatique), ou en disponibilité, et vous disposez de ressources inférieures au plafond du RSA. Vous pouvez obtenir une aide différentielle qui vous garantie un revenu minimal de subsistance (472,37 €/mois pour une personne seule au 1er janvier 2017).Le versement est conditionné à vos démarches d’insertion ou de recherche d’emploi. 
									</p>
									<p>	
										Pour y prétendre, vous devez fournir :
									</p>	
									<ul class="check_cond">
										<li>Un justificatif de domicile</li>
										<li>Un justificatif d’identité ou un titre de séjour</li>
										<li>Votre avis d’imposition</li>
										<li>Le justificatif de vos revenus et de votre patrimoine (avis de pensions, de capitaux placés, de rentes…)</li>
									</ul>
									<p>
										Le CCAS peut vous aider à constituer le dossier et à le transmettre à la CAF ou à la CMSA pour instruction.
									</p>

								<h5>L’Allocation de Solidarité aux Personnes Agées (A.S.P.A.)</h5>
									<p>
										Vous avez ou aurez bientôt plus de 62 ans. Votre situation personnelle ou votre carrière ne vous a pas permis de cotiser suffisamment pour votre retraite, et vos ressources sont trop faibles. Vous pouvez obtenir un complément de ressources mensuelles afin de vous assurer une retraite minimale (801 € pour une personne seule au 1er janvier 2017).
									</p>
									<p>
										L’attribution de l’ASPA déclenche cependant deux conséquences : la récupération sur succession des sommes versées dans la limite de votre part de patrimoine
									</p>
									<p>
										Pour y prétendre, vous devez fournir :
									</p>
									<ul class="check_cond">
										<li>Votre avis d’imposition</li>
										<li>Le justificatif de vos revenus et de votre patrimoine (avis de pensions, de capitaux placés, de rentes…)</li>
										<li>Les coordonnées complètes de vos enfants</li>
									</ul>
									<p>
										Le CCAS peut vous aider à constituer le dossier et à la transmettre à la CARSAT ou la CMSA pour instruction.
									</p>

								<h5>L’Allocation Adulte Handicapé (AAH) et ses droits associés</h5>
									<p>
										Si vous êtes en situation de handicap, que vous soyez salarié ou non, vous pouvez bénéficier d’un complément de revenus pour vous garantir un revenu minimal de subsistance (808,50 € au 1er avril 2016).
									</p>
									<p>
										Pour y prétendre vous devez :
									</p>
									<ul class="check_cond">
										<li>Attester d’une résidence en France de manière stable et effective</li>
										<li>Justifier d’un titre de séjour en cours de validité si vous êtes étranger</li>
										<li>Avoir plus de 20 ans (16 ans sous certaines conditions)</li>
										<li>Avoir un taux d’incapacité d’au moins 80 % reconnu par la CDAPH (ramené à au moins 50 % si votre handicap restreint substantiellement et durablement votre accès à l’emploi)</li>
										<li>Ne pas percevoir de pension d’invalidité ou de rente accident du travail supérieur au plafond</li>
										<li>Avoir des ressources annuelles inférieures au plafond</li>
									</ul>
									<p>
										Des ressources peuvent compléter l’AAH :
									</p>
									<ul class="check_cond">
										<li>Le complément de ressources (CR) : vous pouvez en bénéficier si vous bénéficier d’un logement indépendant, si vous n’exercez pas d’activité professionnelle, si vous n’avez pas atteint l’âge de la retraite, si votre taux d’incapacité est reconnue par la CDAPH supérieur à 80%, si votre capacité de travail est reconnue par la CDAPH inférieure à 5%.</li>
										<li>La Majoration pour la Vie Autonome (MVA) </li>
										<li>L’exonération de la taxe d’habitation et la réduction sociale téléphonique</li>
									</ul>
								<h5>La domiciliation</h5>
									<p>
										Vous n’avez pas d’adresse ou de domicile à déclarer mais vous avez des liens avec la commune de DINAN. Le CCAS peut, gratuitement et pour une durée d’un an, vous ouvrir une domiciliation pour vous permettre d’accéder à vos droits et vos prestations et recevoir du courrier. Vous vous engagez néanmoins à vous manifester auprès du service au moins une fois tous les trois mois pour maintenir son ouverture. Nous vous conseillons néanmoins de nous contacter plus régulièrement afin de vous assurez de ne pas perdre vos droits sociaux ou de ne pas manquer une correspondance décisive. Nous conservons votre courrier cacheté dans une boite aux lettres individuelle, et nous vous le restituons lors de votre passage à l’accueil.
									</p>

								<h5>L’aide au  surendettement</h5>
									<p>
										Vous êtes un particulier, vous avez accumulé des dettes (non professionnelles) et vous êtes dans l’impossibilité de les honorer. La commission de surendettement des Côtes d’Armor peut gratuitement, en fonction de votre situation et avec l’accord de vos créanciers, organiser le rééchelonnement de vos paiements, ou parfois l’effacement partiel ou total de vos dettes.
									</p>
									<p>
										Pour y prétendre vous devez :
									</p>
									<ul class="check_cond">
										<li>Fournir l’état de vos ressources et de vos charges</li>
										<li>Fournir l’état de vos dettes : échéances de prêts immobiliers, échéances de prêts à la consommation, impayés de loyers, arriérés d’impôts sur le revenu, etc…</li>
										<li>Fournir l’état de vos biens et de votre patrimoine</li>
										<li>Justifier de votre situation conjugale et familiale</li>
									</ul>
									<p>
										La commission sera sensible à votre bonne foi, c'est-à-dire d’avoir été sincère dans vos déclarations et de ne pas avoir sciemment organisé votre insolvabilité.
									</p>
									<p>
										Le CCAS peut vous aider à constituer le dossier et le transmettre à la commission (située au siège de la Banque de France). En complément, une aide financière facultative peut éventuellement être instruite par le service (voir l’item Solidarité- Action Sociale, rubrique Aide Sociale facultative). 
									</p>

								<h5>Les Aides à la mobilité</h5>
									<p>
										Vous n’avez pas de moyens de transport et/ou vous éprouvez des difficultés pour financer vos déplacements. Votre mobilité est indispensable pour réaliser vos démarches administratives, assurer votre suivi médical, ou accéder à une formation ou un emploi.
									</p>
									<p>
										Le CCAS peut ponctuellement vous aider en vous attribuant des bons de transport valables pour les transports en communs (train, bus).
									</p>
									<p>
										Pour y prétendre, vous devez fournir :
									</p>
									<ul class="check_cond">
										<li>Votre avis d’imposition</li>
										<li>Le justificatif de vos revenus et de votre patrimoine (avis de pensions, de capitaux placés, de rentes…)</li>
										<li>Le motif de votre déplacement</li>
									</ul>
							</div>
									 
						<a href="#" onclick='afficherCacher("texte3");return false'><h4  class="page-header titre3">3. L’AIDE SOCIALE LEGALE</h4></a>
							<div id="texte3" style="display:none;">
								<h5>De quoi s'agit-il ?</h5>
								<p>
									Les prestations d’aide sociale légale sont des aides destinées à compenser certains déséquilibres financiers dus à la maladie, à la vieillesse ou aux handicaps des personnes qui ne peuvent ainsi être aidées par d’autres moyens. 
								</p>
								<p>
									Les conditions d’attribution d’une prestation d’aide sociale résultent de dispositions législatives ou réglementaires. 
								</p>
								<p>
									L’aide sociale s’appuie sur quatre caractéristiques fondamentales :
								</p>
								<ul>
									<li><u>Son caractère subsidiaire :</u> l’aide sociale n’intervient qu’après épuisement de tous les moyens de recours aux ressources personnelles, à la solidarité familiale, et aux divers régimes de protection sociale existants (Sécurité Sociale, Caisse d’Assurance Vieillesse etc.). Ce principe est appliqué sauf dispositions législatives ou règlementaires contraires.</li>
									<li><u>Son caractère d’avance :</u> Sauf dispositions contraires, les sommes versées au titre de l’aide sociale sont des avances récupérables. Dès lors, le Département peut exercer divers recours dans les conditions prévues par les textes en vigueur. Afin de garantir les recours à engager, le Département peut prendre une hypothèque légale sur les biens du bénéficiaire.</li>
									<li><u>Son caractère temporaire et révisable :</u> l’admission à l’aide sociale n’a pas de caractère définitif. Elle est soumise à révision : en cas de changement de la situation du bénéficiaire, lorsque la décision a été prise sur la base d’éléments incomplets ou erronés ou d’une fausse déclaration, du fait d’une décision judiciaire.</li>
									<li><u>Son caractère personnel et obligatoire :</u> l’aide sociale est un droit personnel, incessible et insaisissable. Elle est accordée en fonction des besoins et de la situation personnelle du demandeur.</li>
								</ul>

								<p>
									Le CCAS est chargé de constituer le dossier de demande et de le transmettre au représentant de l’Etat ou au Président du Conseil Départemental pour instruction et décision.
								</p>

								<h5>Quelles sont les autres aides auxquelles vous pouvez pretendre ?</h5>
								<p>
									<u>La prise en charge des frais d’hébergement en EHPAD ou en FOYER DE VIE:</u>
								</p>
								<p>
									Vous souhaitez intégrer un établissement d’accueil mais vos ressources ne vous permettent pas de couvrir les frais d’hébergement. Vous pouvez bénéficier d’un complément de ressources pour vous aider à payer l’intégralité du reliquat tout en vous permettant de conserver un pécule pour vos dépenses personnelles de plaisir et de confort. Pour y prétendre, vous devez fournir :
								</p>	
									<ul class="check_cond">
										<li>Votre avis d’imposition</li>
										<li>Le justificatif de vos revenus et de votre patrimoine (avis de pensions, de capitaux placés, de rentes…) </li>
										<li>Les coordonnées complètes de vos enfants</li>
									</ul>
								<p>
									Le CCAS peut vous aider à constituer le dossier et à la transmettre au Conseil Départemental pour instruction. Il est conseillé d’anticiper l’entrée en établissement pour solliciter l’Aide Sociale à l’Hébergement compte tenu des délais de traitement des dossiers. 
								</p>

								<p>
									<u>La prise en charge des frais de repas en EHPA / Résidence Autonomie</u>
								</p>
								<p>
									Vous résidez en structure et vos ressources ne vous permettent pas de payer les frais de repas de l’établissement. L’aide sociale peut vous apporter un complément de revenus pour assumer cette charge.
								</p>
								<p>
									Pour y prétendre, vous devez fournir : 
								</p>
								<ul class="check_cond">
									<li>Votre avis d’imposition</li>
									<li>Le justificatif de vos revenus et de votre patrimoine (avis de pensions, de capitaux placés, de rentes…) </li>
									<li>Les coordonnées complètes de vos enfants</li>
								</ul>

								<p>
									<u>La prise en charge d’une partie des frais d’une aide à domicile</u>
								</p>
								<p>
									Vous êtes retraité(e)s et vous souhaitez bénéficier de l’intervention d’une auxiliaire de vie à votre domicile. En fonction de vos revenus, vous pouvez bénéficier d’une participation financière au paiement des frais d’intervention. Si vous sollicitez l’intervention de son service d’aide à domicile, le CCAS peut vous aider à constituer la demande auprès du Conseil Départemental..
								</p>
							</div>

						<a href="#" onclick='afficherCacher("texte4");return false'><h4 class="page-header titre4">4. L’AIDE SOCIALE FACULTATIVE</h4></a>
							<div id="texte4" style="display:none;">
								<h5>De quoi s'agit-il ?</h5>
								
								<p>
									Au titre de sa mission de prévention et de développement social, le CCAS de DINAN a mis en place un dispositif d’aide et d’accompagnement à destination des Dinannais en difficulté. 
								</p>
								<p>
									A la différence de l’aide sociale légale, l’aide sociale facultative n’a aucun caractère obligatoire et relève de la libre initiative du CCAS et de la volonté de la Ville de DINAN d’accompagner les concitoyens les plus fragiles.
								</p>
								<p>
									Le dispositif d’aide sociale facultative s’appuie sur les mêmes principes que l’aide sociale légale, à savoir :
								</p>
								<ul>
									<li>Le caractère <strong>alimentaire</strong>, c'est-à-dire la nécessité pour vous de justifier d’un besoin ponctuel de subsistance.</li>
									<li>Le caractère <strong>objectif</strong>, c'est-à-dire que votre demande est étudiée selon les mêmes critères que toutes les autres (fixés par le règlement intérieur du CCAS).</li>
									<li>Le caractère <strong>subsidiaire</strong>, c'est-à-dire que le CCAS ne se substitue pas aux différents régimes légaux et n’intervient que lorsque vous avez épuisés vos droits.</li>
								</ul>
								<p>
									Le CCAS est attaché au principe d’égalité et de non discrimination, et assure une possibilité de recours envers les décisions administratives prononcées.
								</p>

								<h5>Qui est concerné ?</h5>
								
								<p>
									Les aides facultatives du CCAS vous sont accessibles si vous résidez sur la commune de DINAN et sous réserve de remplir les conditions de ressources.
								</p>

								<h5>Quelles sont les prestations proposées ?</h5>
								
								<u>Les secours d'urgence</u>
								<p>
									Vous rencontrez de façon passagère une situation difficile. Nous pouvons vous aider ponctuellement à assumer l’achat des produits de première nécessité (nourriture, produits d’hygiène) sous la forme de Chèques d’Accompagnement Personnalisé valables dans tous les commerces d’alimentation.
								</p>

								<u>Les aides financières dédiées</u>
								<p>
									Votre situation financière est fragilisée par un imprévu. Le CCAS peut vous aider à retrouver un équilibre en vous soutenant financièrement sur des questions relatives à votre logement et à ses charges, à votre insertion professionnelle, à votre santé, à la scolarité de vos enfants… L’intervention du CCAS est ponctuelle et n’a pas pour vocation à compenser une insuffisance permanente de ressources. L’aide du CCAS peut être délivrée sous forme de Chèques d’Accompagnement Personnalisé valables dans tous les commerces d’alimentation, sous la forme d’un paiement direct à l’un de vos débiteurs, ou sous la forme d’un mandat retirable en espèces au guichet du Trésor Public.
								</p>

								<u>L’aide au paiement de la restauration scolaire</u>
								<p>
									Vous avez un enfant scolarisé dans une école maternelle ou élémentaire de DINAN et vous éprouvez des difficultés pour payer le restaurant scolaire. Le CCAS peut vous octroyer une aide en fonction de votre quotient familial qui sera directement versée aux services financiers de la mairie.
								</p>

								<u>Les bourses de rentrée scolaire</u>
								<p>
									Le CCAS peut vous attribuer une bourse destinée à vous aider à assumer les frais souvent conséquents durant la période de rentrée scolaire. La participation financière du CCAS intervient en fonction du quotient familial et sur présentation du certificat de scolarité. Elle est versée sous la forme d’un virement sur votre compte bancaire.
								</p>

								<u>Les bourses d’enseignement musical</u>
								<p>
									Afin de favoriser l’accès de vos enfants à la musique, le CCAS peut vous aider à régler une partie des frais d’inscription du Kiosque. La participation financière du CCAS intervient en fonction du quotient familial et sur présentation de la facture acquittée. Elle est versée sous la forme d’un virement sur votre compte bancaire.
								</p>
							</div>

					<a href="#" onclick='afficherCacher("texte5");return false'><h4 class="page-header titre5">5. LES FRAIS DE SANTE</h4></a>
					<div id="texte5" style="display:none;">
						<h5>L’aide médicale d’Etat</h5>
						<p>
							Vous êtes étrangers et votre statut ne vous permet pas d’accéder à la Couverture Maladie Universelle (CMU). Sous certaines conditions, l’Aide Médicale d’Etat (AME) peut vous permettre de bénéficier d’un accès aux soins.
						</p>
						<p>
							Pour y prétendre, vous devez :
						</p>
						<ul class="check_cond">
							<li>Justifier d’une résidence sur le territoire français depuis plus de 3 mois</li>
							<li>Justifier de votre démarche de régularisation</li>
							<li>Justifier de votre identité et de celle des personnes à votre charge</li>
							<li>Ne pas dépasser un certain niveau de ressources</li>
						</ul>
						<p>
							Le CCAS va instruire votre demande et la transmettre à la sécurité sociale qui statue. 

						</p>

						<h5>La Protection Universelle Maladie (PUMA)</h5>
						<p>
							Vous ne disposez pas actuellement de couverture sociale. La PUMA peut vous être proposé pour pouvoir être remboursé de la part obligatoire de vos dépenses de santé ou pour bénéficier de soins sans avance de frais (consultations, examens, médicaments). La PUMA est gratuite sauf si vos revenus dépassent un certain plafond. Les personnes de votre foyer qui ne seraient pas couverts par l’assurance maladie peuvent également bénéficier de ce dispositif. 
						</p>
						<p>
							Pour y prétendre, vous devez :
						</p>
						<ul class="check_cond">
							<li>Justifiez de votre nationalité Française ou de votre situation régulière si vous êtes étranger</li>
							<li>Résidez depuis plus de 3 mois de manière stable et régulière sur le territoire</li>
						</ul>
						<p>
							Le CCAS va instruire votre demande et la transmettre à la sécurité sociale qui statue. 

						</p>
						<h5>La Couverture Maladie Universelle Complémentaire (CMU-C)</h5>
						<p>
							La CMU complémentaire est une complémentaire santé gratuite et accordée pour un an. Elle prend en charge ce qui n’est pas couvert par les régimes d’assurance maladie obligatoire. Elle permet de bénéficier d’une prise en charge à 100% des dépenses de santé sans avoir à faire l’avance des frais. Pour bénéficier de cette prise en charge, la carte Vitale et l’attestation des droits à la CMU complémentaire doivent être présentées au médecin, au pharmacien, au laboratoire, ou à l’hôpital.
						</p>
						<p>
							Pour y prétendre, vous devez :
						</p>
						<ul class="check_cond">
							<li>Justifiez de votre nationalité Française ou de votre situation régulière si vous êtes étranger</li>
							<li>Résidez depuis plus de 3 mois de manière stable et régulière sur le territoire</li>
							<li>Ne pas dépasser le plafond d’attribution de la CMU</li>
						</ul>
						<p>
							Le CCAS va instruire votre demande et la transmettre à la sécurité sociale qui statue. 
						</p>
						<h5>L’aide à la Complémentaire Santé</h5>
						<p>
							Vous dépassez légèrement les plafonds de la Couverture Maladie Universelle Complémentaire. Vous pouvez peut-être prétendre pendant un an à une Aide à la Complémentaire Santé permettant de réduire le montant de vos cotisations.
						</p>
						<p>
							Pour y prétendre, vous devez :
						</p>
						<ul class="check_cond">
							<li>Justifiez de votre nationalité Française ou de votre situation régulière si vous êtes étranger</li>
							<li>Résidez depuis plus de 3 mois de manière stable et régulière sur le territoire</li>
							<li>Ne pas dépasser le plafond d’attribution de l’ACS</li>
						</ul>
						<p>
							Le CCAS va instruire votre demande et la transmettre à la sécurité sociale qui statue. 
						</p>
						<h5>La Mutuelle</h5>
						<p>
							Vous ne disposez pas ou plus d’une couverture totale de vos frais de santé faute de mutuelle. La démarche de souscription vous parait difficile, vous avez perdu vos droits, ou vous ne disposez pas de ressources suffisantes pour adhérer à un organisme ordinaire.
							Dans le cadre du dispositif « Ma commune, ma santé », le CCAS peut vous permettre sans délai de carence, et sans condition d’âge, de santé ou de ressources d’accéder à une mutuelle à des tarifs avantageux. Dans le cadre d’un appel d’offre, plusieurs solutions correspondant au plus juste à votre situation vous seront proposées.
						</p>
						<p>
							Pour y prétendre, vous devez :
						</p>
						<ul class="check_cond">
							<li>Fournir un justificatif de domicile</li>
							<li>Fournir un relevé d’Identité Bancaire pour les prélèvements</li>
						</ul>
						<p>
							Le CCAS va vous conseiller, instruire votre demande et le transmettre à l’organisme de mutuelle que vous aurez choisi. Des permanences peuvent également être organisées avec un référent du dispositif.
						</p>
					</div>

				<a href="#" onclick='afficherCacher("texte6");return false'><h4 class="page-header titre6">6. L’ACCES AU LOGEMENT ET LE MAINTIEN A DOMICILE</h4></a>
					<div id="texte6" style="display:none;">
						<h5>Le Fond Solidarité Logement (FSL)</h5>
						<p>
							Vous rencontrez des difficultés pour accéder à un logement ou pour assurer les dépenses du logement que vous occupez. A certaines conditions et selon les départements, le FSL peut vous accorder une aide financière pour vous aider à payer :
						</p>
						<ul class="check_cond">
							<li>Les dépenses liées à l’entrée dans votre logement : les frais d’agence, le dépôt de garantie, le premier loyer, l’assurance du logement, les frais de déménagement, l’achat du mobilier de première nécessité lors d’un emménagement</li>
							<li>Les dettes de loyers ou des charges liées à votre logement : factures d’électricité, d’eau, de gaz ou de téléphone</li>
						</ul>
						<p>
							Vous pouvez y prétendre que vous soyez locataire, propriétaire, ou hébergé à titre gracieux. L’aide du FSL est soumise à condition de ressources et à un accompagnement social.
						</p>
						<p>
							Pour y prétendre, vous devez :
						</p>
						<ul class="check_cond">
							<li>Fournir le justificatif de vos ressources et de vos charges</li>
							<li>Fournir le justificatif de vos factures ou de vos dettes motivant le recours au FSL</li>
						</ul>
						<p>
							Le CCAS va instruire votre demande et la transmettre à la commission 	départementale 	qui statue. 
						</p>
						
						<h5>L’Allocation Personnalisée Autonomie (APA)</h5>
						<p>
							Vous êtes âgés et vous éprouvez des difficultés dans votre quotidien pour accomplir les actes essentiels de la vie courante : faire votre toilette, vous habillez, effectuez vos transferts et vous déplacez, préparer vos repas et/ou vous alimentez. Vous rencontrez peut-être des difficultés de mémoire et d’orientation, ou pour gérer votre hygiène intime.  
						</p>
						<p>
							Afin de faciliter votre maintien à domicile, vous pouvez bénéficiez d’une aide financière du Département pour :
						</p>
						<ul class="check_cond">
							<li>Recruter une auxiliaire de vie</li>
							<li>Financer du matériel ou des services favorisant la conservation de votre autonomie : portage de repas, téléassistance, produits d’hygiène, adaptables,…</li>
							<li>Engager des travaux d’aménagement de votre domicile : remplacement d’une baignoire par une douche, installation de main courante ou de rampe d’accès, élargissement des portes intérieures permettant le passage d’un fauteuil roulant,…</li>
							<li>Financer des accompagnements thérapeutiques ou des plates formes de répit : accueil de jour, transport adapté, hébergement temporaire en EHPAD</li>
						</ul>
						<p>
							 Le montant et l’affectation de l’aide financière est évalué au regard de votre autonomie évaluée selon la grille nationale AGGIR (un certain niveau de perte étant requis), de votre besoin, et de vos ressources.
						</p>
						<p>
							Pour y prétendre, vous devez :
						</p>
						<ul class="check_cond">
							<li>Etre âgé de plus de 60 ans</li>
							<li>Résider de façon stable et régulière en France</li>
							<li>Justifier de votre autonomie et de vos besoins</li>
						</ul>
						<p>
							Le CCAS va instruire votre demande et la transmettre au Conseil Départemental qui statue après une visite à votre domicile.
						</p>
						<p>
							L’APA peut également être sollicitée pour aider au financement des frais d’hébergement pour un accueil permanent en EHPAD. C’est l’établissement qui effectue les démarches si sa capacité est supérieure à 25 places.
						</p>
					</div>

				<a href="#" onclick='afficherCacher("texte7");return false'><h4 class="page-header titre7">7. LES PARTENAIRES DU SERVICE SOCIAL</h4></a>
					<div id="texte7" style="display:none;">
						<h5>Pour un besoin alimentaire</h5>
						<p>
							Nous travaillons en collaboration avec des associations caritatives du territoire qui peuvent vous soutenir pour des aides alimentaires (distribution de nourriture, vente de denrées à prix modiques, secours financiers). Certaines d’entre elles peuvent vous recevoir directement et étudieront vos droits selon vos ressources et votre situation familiale. Pour d’autres, notre service est chargé dévaluer les droits et de constituer le dossier d’inscription.
							En fonction de votre situation et de vos besoins, nous vous orienterons vers le partenaire le plus adapté et nous vous aiderons dans vos démarches.
						</p>
						<ul>
							<li class="nom_part">Les Restos du Cœur</li>
							<li>5 allée des Prunus – ZI DINAN</li>
							<li class="detail_part">Inscription sur place aux jours de permanence (mercredi après-midi et jeudi)</li>
						</ul>

						<ul>
							<li class="nom_part">Solidarité Pays de DINAN - Banque Alimentaire</li>
							<li>48 promenade de la fontaine des eaux – DINAN</li>
							<li class="detail_part">Inscription au CCAS</li>
						</ul>

						<ul>
							<li class="nom_part">Le Secours Populaire</li>
							<li>46 bis Promenade de la fontaine des eaux – DINAN</li>
							<li class="detail_part">Inscription sur place aux jours de permanence (mardi et mercredi)</li>
						</ul>

						<ul>
							<li class="nom_part">La Croix Rouge</li>
							<li>414 bis Rue Chateaubriand – DINAN</li>
							<li class="detail_part">Inscription sur place aux jours de permanence</li>
						</ul>

						<ul>
							<li class="nom_part">L’Epicerie Sociale</li>
							<li>Cité de la Ville Goudelin - DINAN</li>
							<li class="detail_part">Vente de produits alimentaires, d’hygiène et de première nécessité à prix modiques. Inscription sur place aux jours de permanence.</li>
						</ul>

						<ul>
							<li class="nom_part">Les Jardins de Cocagne – Les Amis des Jardins</li>
							<li>7 bis Rue de la Coulebart – DINAN</li>
							<li class="detail_part">Vente de légumes frais et biologiques à prix modiques, cours de cuisine, participation aux récoltes. Inscription au CCAS.</li>
						</ul>

						<h5>Pour un besoin vestimentaire</h5>
						<p>
							Nous travaillons en collaboration avec des associations caritatives du territoire qui peuvent vous soutenir pour des aides vestimentaires (dons ou ventes à prix modérés). Elles peuvent vous recevoir directement ou sur orientation du CCAS.
						</p>

						<ul>
							<li class="nom_part">Les Restos du Cœur</li>
							<li>5 allée des Prunus – ZI DINAN</li>
							<li class="detail_part">Dons de vêtements pour tous les âges. Inscription sur place aux jours de permanence (mercredi et jeudi). L’accès au vestiaire est réservé aux personnes bénéficiaires de la distribution alimentaire.</li>
						</ul>

						<ul>
							<li class="nom_part">Le Secours Populaire</li>
							<li>46 bis Promenade de la fontaine des eaux – DINAN</li>
							<li class="detail_part">Les vêtements pour tous les âges sont vendus à des prix modiques. Inscription sur place aux jours de permanence (mardi et mercerdi).</li>
						</ul>

						<ul>
							<li class="nom_part">La Croix Rouge</li>
							<li>14 bis Rue Chateaubriand – DINAN</li>
							<li class="detail_part">Dons de vêtements pour tous les âges. Inscription sur place aux jours de permanence.</li>
						</ul>

						<ul>
							<li class="nom_part">La Conférence Saint Vincent de Paul</li>
							<li>46 Promenade de la fontaine des eaux - DINAN</li>
							<li class="detail_part">Les vêtements pour tous les âges sont vendus à des prix modiques. Inscription au CCAS ou sur place aux jours de permanence (vendredi matin).</li>
						</ul>

						<h5>Pour un besoin de mobilier et de vaisselle</h5>
						<p>
							Nous travaillons en collaboration avec des associations caritatives du territoire qui peuvent vous soutenir pour des aides vestimentaires (dons ou ventes à prix modérés). Elles peuvent vous recevoir directement ou sur orientation du CCAS.
						</p>
						<ul>
							<li class="nom_part">La Conférence Saint Vincent de Paul</li>
							<li>46 Promenade de la fontaine des eaux - DINAN</li>
							<li class="detail_part">Dons et vente de tout type de mobilier et de vaisselle. Inscription au CCAS ou sur place aux jours de permanence (vendredi matin).</li>
						</ul>
						<ul>
							<li class="nom_part">EMMAÜS</li>
							<li>13 rue de Saint Malo – ST BRIEUC</li>
							<li class="detail_part">Dons et vente de tout type de mobilier et de vaisselle. Inscription au CCAS.</li>
						</ul>

						<h5>Pour un besoin de logement</h5>
						<p>
							Nous travaillons en collaboration avec des associations et organismes du territoire qui peuvent vous héberger, vous accompagner dans votre recherche de logement, ou qui peuvent vous aider à en améliorer les conditions.
						</p>
						<ul>
							<li class="nom_part">DINAN Habitat</li>
							<li>14 boulevard de l’Europe – CS 61017 – DINAN</li>
							<li class="detail_part">Demande de logement social. Inscription sur place (02.96.87.15.15)</li>
						</ul>
						<ul>
							<li class="nom_part">Maison du Département</li>
							<li>Service Action Sociale, 7 rue Victor Schoelcher – DINAN</li>
							<li class="detail_part">Aides aux démarches administratives, accompagnement social, secours financiers pour les familles. Prise de rendez-vous sur place (02.96.80.00.80)</li>
						</ul>
						<ul>
							<li class="nom_part">Compagnons Bâtisseurs</li>
							<li>324 Cité Bretonnière, bâtiment 7 – DINAN</li>
							<li class="detail_part">Travaux de rénovation et d’embellissement de logements avec la participation active des locataires ou propriétaires, participation aux achats de matériel. Contact en direct au 02.96.80.97.63 ou par l’intermédiaire du CCAS</li>
						</ul>
						<ul>
							<li class="nom_part">Association NOZ DEIZ</li>
							<li>12 rue du Capitaine Hesry – DINAN</li>
							<li class="detail_part">Centre d’Hébergement et de Réinsertion Sociale, hébergement temporaire, accueil de jour, accompagnement social, lits halte soin santé. Prise de rendez-vous sur place</li>
						</ul>
						<ul>
							<li class="nom_part">Association STEREDENN</li>
							<li>Chemin du Pont Pinet - DINAN</li>
							<li class="detail_part">Résidence Habitat Jeunes (FJT), logements en sous location, bourse aux logements, accompagnement social lié au logement, accueil de jour de personnes victimes de violence. Renseignements et inscriptions sur place (02.96.87.12.12) </li>
						</ul>
						<h5>Pour un besoin de vacances ou de loisirs</h5>
						<ul>
							<li class="nom_part">Le Secours Populaire</li>
							<li>46 bis Promenade de la fontaine des eaux – DINAN</li>
							<li class="detail_part">Possibilité de partir en famille pendant l’été. Inscription sur place aux jours de permanence (mardi et mercredi).</li>
						</ul>
						<ul>
							<li class="nom_part">Maison du Département</li>
							<li>Service Action Sociale, 7 rue Victor Schoelcher – DINAN</li>
							<li class="detail_part">Aides aux démarches administratives, accompagnement social, secours financiers pour les familles. Prise de rendez-vous sur place (02.96.80.00.80)</li>
						</ul>
						<ul>
							<li class="nom_part">Mission Locale</li>
							<li>5 rue Gambetta – DINAN</li>
							<li class="detail_part">Pour les jeunes de 16 à 25 ans : accueil, information et orientation, aide à la recherche d’emploi, à la formation, aide financière dans le cadre du Fond Local d’Aide aux Jeunes (subsistance, formation, mobilité) </li>
						</ul>
						<ul>
							<li class="nom_part">Atelier du 5 bis</li>
							<li>5 bis rue Gambetta - DINAN</li>
							<li class="detail_part"Accueil, écoute et orientation ; renseignements, inscriptions et facturation des  services périscolaires et des centre de loisirs ; point informations jeunesse ; accompagnement des projets et initiatives collectives. Renseignements et inscriptions sur place (02.96.39.38.21)</li>
						</ul>
						<h5>Pour des questions relatives à vos enfants ou à votre famille</h5>
						<ul>
							<li class="nom_part">Atelier du 5 bis</li>
							<li>5 bis rue Gambetta - DINAN</li>
							<li class="detail_part"Accueil, écoute et orientation ; renseignements, inscriptions et facturation des  services périscolaires et des centre de loisirs ; point informations jeunesse ; accompagnement des projets et initiatives collectives. Renseignements et inscriptions sur place (02.96.39.38.21)</li>
						</ul>
						<ul>
							<li class="nom_part">Maison du Département</li>
							<li>Service Action Sociale, 7 rue Victor Schoelcher – DINAN</li>
							<li class="detail_part">Aides aux démarches administratives, accompagnement social, secours financiers pour les familles. Prise de rendez-vous sur place (02.96.80.00.80)</li>
						</ul>
						<ul>
							<li class="nom_part">Mission Locale</li>
							<li>5 rue Gambetta – DINAN</li>
							<li class="detail_part">Pour les jeunes de 16 à 25 ans : accueil, information et orientation, aide à la recherche d’emploi, à la formation, aide financière dans le cadre du Fond Local d’Aide aux Jeunes (subsistance, formation, mobilité) </li>
						</ul>

						<h5>Pour des questions relatives à votre insertion</h5>
						<ul>
							<li class="nom_part">Maison du Département</li>
							<li>Service Action Sociale, 7 rue Victor Schoelcher – DINAN</li>
							<li class="detail_part">Aides aux démarches administratives, accompagnement social, secours financiers pour les familles. Prise de rendez-vous sur place (02.96.80.00.80)</li>
						</ul>
						<ul>
							<li class="nom_part">Mission Locale</li>
							<li>5 rue Gambetta – DINAN</li>
							<li class="detail_part">Pour les jeunes de 16 à 25 ans : accueil, information et orientation, aide à la recherche d’emploi, à la formation, aide financière dans le cadre du Fond Local d’Aide aux Jeunes (subsistance, formation, mobilité) </li>
						</ul>
						<ul>
							<li class="nom_part">Association STEREDENN</li>
							<li>Chemin du Pont Pinet - DINAN</li>
							<li class="detail_part">Chantiers d’insertion, formations, aide à la mobilité, centre d’informations, boutique solidaire. Renseignements et inscriptions sur place (02.96.87.12.12) </li>
						</ul>
						<ul>
							<li class="nom_part">Atelier du 5 bis</li>
							<li>5 bis rue Gambetta - DINAN</li>
							<li class="detail_part"Accueil, écoute et orientation ; point informations jeunesse ; accompagnement des projets et initiatives collectives. Renseignements et inscriptions sur place (02.96.39.38.21)</li>
						</ul>

						<h5>Pour des questions relatives à votre accueil si vous êtes étrangers</h5>
						<p>
							Nous travaillons en collaboration avec une association caritative du territoire qui peut vous soutenir pour des démarches administratives relatives à votre statut. Nous vous invitons à la contacter directement :
						</p>
						<ul>
							<li class="nom_part">Solidarité Pays de Rance</li>
							<li>Permanence à l’Atelier du 5 bis, Rue Gambetta - DINAN</li>
						</ul>
					</div>














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
