<?php



$wp = query_posts(array(
    'post_type'	=> 'location',
));
echo '<div class="container">';
if(have_posts()) : while(have_posts()) : the_post();
    echo '<div class="row">';
    echo '<div class="col-md-4">';
    the_content();
    echo '</div>';

    echo '<div class="col-md-8">';
    echo '<h3>'; the_title(); echo '</h3>';
    echo '<p>'; the_excerpt(); echo '</p>';
    echo '<p>'; echo get('date_de_parution'); echo '</p>';
    echo '</div>';
    echo '</div>';
    echo '<hr>';

endwhile; endif;
?>