
<?php
/**
 * Template Name: AVIS
 */


get_header();

?>


	<section id="avissec1">
		<div class="container container-interview">

			<div class="row">
				<div class="col-md-12 coltem">
					<h2>TEMOIGNAGES</h2>
					<hr class="hrblack">
				</div>
			</div>

			<?php

			$wp = query_posts(array(
				'post_type'	=> 'temoignage',
				'meta_key' => 'position',
				'meta_value' => 'left'
			));

			if(have_posts()) : while(have_posts()) : the_post();
				echo '<div class="row">';
					echo '<div class="col-md-4">';
						echo '<img src='; echo get('image'); echo ' class="img-responsive clodo1 " >';
					echo '</div>';

					echo '<div class="col-md-8 tem-text">';
						echo '<h4>'; echo get('nom'); echo '</h4>';
						echo '<h4>'; echo get('prenom'); echo '</h4>';
						echo '<h4>'; echo get('age'); echo '</h4>';
						echo '<blockquote id="block1">'; echo'<p>'; echo get('histoire'); echo'</p>';
						echo '<small>de '; echo'<cite>'; echo get('prenom'); echo' '; echo get('nom');echo'</cite>';echo'</small>';
						echo'</blockquote>';
					echo '</div>';
				echo '</div>';

			endwhile; endif;

			?>

			<hr class="hrcomment">

			<?php

			$wp = query_posts(array(
				'post_type'	=> 'temoignage',
				'meta_key' => 'position',
				'meta_value' => 'right'
			));

			if(have_posts()) : while(have_posts()) : the_post();
				echo '<div class="row">';
					echo '<div class="col-md-8 tem-text">';
						echo '<h4>'; echo get('nom'); echo '</h4>';
						echo '<h4>'; echo get('prenom'); echo '</h4>';
						echo '<h4>'; echo get('age'); echo '</h4>';
						echo '<blockquote id="block1">'; echo'<p>'; echo get('histoire'); echo'</p>';
						echo '<small>de '; echo'<cite>'; echo get('prenom'); echo' '; echo get('nom');echo'</cite>';echo'</small>';
						echo'</blockquote>';
					echo '</div>';

					echo '<div class="col-md-4">';
						echo '<img src='; echo get('image'); echo ' class="img-responsive clodo1 " >';
					echo '</div>';


				echo '</div>';

			endwhile; endif;

			?>

</div>

<!--

			<div class="row">
				<div class="col-md-4" id="interview1">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/bg.jpg"  alt="logo SLG" class="img-responsive clodo1">
				</div>
				<div class="col-md-8 tem-text">
					<h4>Prénom:Jean</h4>
					<h4>Nom:Delarue</h4>
					<h4>Age:57 ans</h4>
					<blockquote id="block1">
     							<p>“J'ai vite commencé à faire la manche. Au début, je n'osais pas. Je paniquais. Je prenais la monnaie en main, je n'avais pas de pot.Grâce à Nepaseloger, j’ai faciliment trouvé un endroit pour passer mes nuits dans un confort longtemps recherché”</p>
     							<small>de <cite>Jean Delarue</cite></small>
					</blockquote>
				</div>
			</div>
			<hr class="hrcomment">
			<div class="row">
				<div class="col-md-8 tem-text">
					<h4>Prénom:Jean</h4>
					<h4>Nom:Caisse</h4>
					<h4>Age:65 ans</h4>
					<blockquote id="block2">
     							<p>“Ah, en hiver! Oui, j'ai déjà craqué, en hiver. En arrivant sur mon banc, j'ai pleuré comme un enfant. Un soir, je me suis endormi, j'avais bu, je n'ai pas mis ma couverture, on m'a vidé les poches, pris mes papiers. Depuis, plus moyen d'en ravoir d'autres! Je suis un sans -papiers...francais.Nepaseloger, m’a donné une seconde identitée”</p>
     							<small>de <cite>Jean Caisse</cite></small>
					</blockquote>
				</div>
				<div class="col-md-4" id="interview2">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/bg3.jpg"  alt="logo SLG" class="img-responsive clodo2">
				</div>
			</div>
		</div>

-->

	</section>

	<section id="avissec2">



		<div class="container container-commentaire">

			<!--

			<div class="row">
				<div class="col-md-12 colavis">
					<h2>AVIS</h2>
					<hr class="hrwhite">
				</div>
			</div>

			<div class="row commentaire">
					<div class="col-md-2">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/pic.jpg" class="img-circle center-block" width="100" height="100" id="pic"/>
					</div>
					<div class="col-md-2">
								<h4>Julia</h4>
								<h4>Poliakov</h4>
								<h4>25 ans</h4>
					</div>
					<div class="col-md-8">
						<a class="lieu" href="">Pont Alexandre III</a>
						<p> Très agréablement surprise.Je recommande fortement cette location facile d'accès.</p>
					</div>
				</div>
				<hr class="hrcomment">
				<div class="row commentaire">
					<div class="col-md-2">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/pic1.png" class="img-circle center-block" width="100" height="100" id="pic"/>
					</div>
					<div class="col-md-2">
								<h4>Jack</h4>
								<h4>Daniels</h4>
								<h4>37 ans</h4>
					</div>
					<div class="col-md-8">
						<a class="lieu" href="">Auberge de jeunesse HessLand</a>
						<p> Bonne ambiance, la cuisine est entierement équipée.Mauvais point: le lit est un peu dur</p>
					</div>
				</div>
				<hr class="hrcomment">
				<div class="row commentaire">
					<div class="col-md-2">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/pic2.jpg" class="img-circle center-block" width="100" height="100" id="pic"/>
					</div>
					<div class="col-md-2">
								<h4>FX</h4>
								<h4>Heineken</h4>
								<h4>34 ans</h4>
					</div>
					<div class="col-md-8">
						<a class="lieu" href="">L’auto loft d’Opéra</a>
						<p>Salon au top possède , réveil agréable grâce aux baies vitrées.Coin douche tombe souvent en panne .</p>
					</div>
				</div>

-->

			<hr class="hrcomment">


			<?php



			$wp = query_posts(array(
				'post_type'	=> 'commentaire',
			));
			if(have_posts()) : while(have_posts()) : the_post();
				echo '<div class="row commentaire">';
					echo '<div class="col-md-2">';
						echo '<img src='; echo get('image'); echo ' class="img-circle center-block" width="100" height="100" >';
					echo '</div>';

					echo '<div class="col-md-2">';
						echo '<h4>'; echo get('nom'); echo '</h4>';
						echo '<h4>'; echo get('prenom'); echo '</h4>';
						echo '<h4>'; echo get('age'); echo '</h4>';
					echo '</div>';

					echo '<div class="col-md-8">';
						echo '<a class="lieu" href="#">'; echo get('lieu'); echo '</a>';
						echo '<p>'; echo get('commentaire'); echo '</p>';
					echo '</div>';

				echo '</div>';
				echo '<hr class="hrcomment">';

			endwhile; endif;
			?>


		</div>
	</section>


<?php
	get_footer();
?>

