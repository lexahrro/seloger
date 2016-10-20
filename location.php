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
            'meta_key' => 'a_la_une'
        ));
            echo '<div class="row">';
        if(have_posts()) : while(have_posts()) : the_post();
            echo '<div class="col-md-4">';
            the_content();
            echo '<div class="colann">';
            echo '<h3>'; the_title(); echo '</h3>';
            echo '<p>'; the_excerpt(); echo '</p>';
            echo '<p>'; echo get('date_de_parution'); echo '</p>';
            echo '</div>';
            echo '</div>';



        endwhile; endif;
        echo '</div>';
        ?>


    </div>
</section>
<section id="secloc2">

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

</section>

<?php

get_footer();

?>