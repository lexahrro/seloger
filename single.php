<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<body class="bodygris">

<?php
	if (have_posts()) : while(have_posts()) : the_post();
		echo '<div class="container secsingle">';
			echo '<div class="row">';
				echo '<div class="col-md-8 col-img">';
				echo '<img src='; echo get('image'); echo ' class="img-responsive" >';
				echo '</div>';

				echo '<div class="col-md-4 input-article">';

				echo '</div>';
			echo '</div>';

		echo '<div class="row">';
				echo '<div class="col-md-12 col-article">';
					echo '<h2>';the_title(); echo '</h2>';
					echo '<p>'; echo get('description'); echo '</p>';
				echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';

	endwhile; endif;
?>
</body>

<?php get_footer(); ?>
