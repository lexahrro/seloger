
<?php
/**
 * Template Name: AVIS
 */


get_header();

?>


	<section id="avissec1">
		<div class="container container-interview">
			<div class="row">
				<div class="col-md-4" id="interview1">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/bg.jpg"  alt="logo SLG" class="img-responsive clodo1"> <!--Photo interview 1-->
				</div>
				<div class="col-md-8" id="texte1"> <!-- Citation interview 1-->
					<h4>Prénom:Jean</h4>
					<h4>Nom:Delarue</h4>
					<h4>Age:57 ans</h4>
					<blockquote id="block1">
     							<p>“J'ai vite commencé à faire la manche. Au début, je n'osais pas. Je paniquais. Je prenais la monnaie en main, je n'avais pas de pot.Grâce à Nepaseloger, j’ai faciliment trouvé un endroit pour passer mes nuits dans un confort longtemps recherché”</p>
     							<small>de <cite>Jean Delarue</cite></small><!-- Citation du clodo1 -->
					</blockquote>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8" id="texte2"> <!-- Citation interview 2-->
					<h4>Prénom:Jean</h4>
					<h4>Nom:Caisse</h4>
					<h4>Age:65 ans</h4>
					<blockquote id="block2">
     							<p>“Ah, en hiver! Oui, j'ai déjà craqué, en hiver. En arrivant sur mon banc, j'ai pleuré comme un enfant. Un soir, je me suis endormi, j'avais bu, je n'ai pas mis ma couverture, on m'a vidé les poches, pris mes papiers. Depuis, plus moyen d'en ravoir d'autres! Je suis un sans -papiers...francais.Nepaseloger, m’a donné une seconde identitée”</p><!-- Citation du clodo1 -->
     							<small>de <cite>Jean Caisse</cite></small>
					</blockquote>  <!-- Citation du clodo2 -->
				</div>
				<div class="col-md-4" id="interview2">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/bg3.jpg"  alt="logo SLG" class="img-responsive clodo2"> <!--Photo interview 2-->
				</div>
			</div>
		</div>


	</section>

	<section id="avissec2">
		<div class="container container-commentaire">
			<div class="row">
				<div class="commentaire">
					<div class="col-md-2">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/pic.jpg" class="img-circle center-block" width="100" height="100" id="pic"/>
					</div>
					<div class="col-md-3 fiche">
								<h4>Julia</h4>
								<h4>Poliakov</h4>
								<h4>25 ans</h4>
					</div>
					<div class="col-md-7">
						<p>Bonjour</p>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php
	get_footer();
?>

