<?php
/**
 * Template Name: LOCATION
 */


get_header();

?>

<section id="secloc1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 coltext">
                <h2>A LA UNE</h2>
                <hr class="hrblack">
            </div>
        </div>

        <?php

        $wp = query_posts(array(
            'post_type'	=> 'location',
            'meta_key' => 'a_la_une',
            'showposts' => '3'
        ));

        echo '<div class="row">';
        echo '<div class="grid">';
        if(have_posts()) : while(have_posts()) : the_post();
            echo'<div class="col-md-4">';
            echo'<figure class="effect-julia">';
            echo '<img src='; echo get('image'); echo ' class="img-responsive" >';
            echo'<figcaption>';
            echo '<h2>'; the_title(); echo '</h2>';
            echo'<div>';
            the_excerpt();
            echo '<p>'; echo get('date_de_parution'); echo '</p>';
            echo'</div>';
            echo'<a href="#">View more</a>';
            echo'</figcaption>';
            echo'</figure>';
            echo'</div>';

        endwhile; endif;

        echo'</div>';
        echo'</div>';
        ?>


    </div>
</section>
<section id="secloc2">

    <?php



        $wp = query_posts(array(
            'post_type'	=> 'location',
        ));
        echo '<div class="container container-loc">';
        if(have_posts()) : while(have_posts()) : the_post();
            echo '<div class="row rowloc">';
                echo '<div class="col-md-4">';
                    echo '<img src='; echo get('image'); echo ' class="img-responsive" >';
                echo '</div>';

                echo '<div class="col-md-8">';
                    echo '<h3>'; the_title(); echo '</h3>';
                    echo '<p>'; the_excerpt(); echo '</p>';
                    echo '<p>'; echo get('date_de_parution'); echo '</p>';
                echo '</div>';
            echo '</div>';

        endwhile; endif;
    ?>

</section>

<?php

get_footer();

?>