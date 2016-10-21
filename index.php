<?php get_header(); ?>

<section id="sec1">
<div class="container container-search animated fadeIn">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="animated flipInX">Trouvez votre bonheur</h2>
        </div>
    </div>
    <div class="row inputmrg">
        <div class="col-md-4 col-xs-12 inputmrg">
            <input type="text" class="form-control" placeholder="Lieu">
        </div>
        <div class="col-md-3 col-xs-12 inputmrg">
            <input type="text" class="form-control" placeholder="Nombre de personnes">
        </div>
        <div class="col-md-3 col-xs-12 inputmrg">
            <input type="text" class="form-control" placeholder="Taux d'alcoolémie">
        </div>
        <div class="col-md-2 col-xs-12 inputmrg btnmrg">
            <button class="btn btn-head" type="submit">ENVOI</button>
        </div>
    </div>
</div>

</section>
<section id="sec2">
    <div class="container container-mos animated zoomIn">
    <div class="row">
        <div class="col-md-12 coltext">
            <h2>NOS OFFRES</h2>
            <hr class="hrblack">

        </div>
    </div>


    <div class="row">
    <?php

    $wp = query_posts(array(
        'post_type'	=> 'post',
        'meta_key' => 'position',
        'meta_value' => 'left'
    ));
    echo '<div class="col-md-6 coll">';
    if(have_posts()) : while(have_posts()) : the_post();
        echo '<div class="hovereffect1 imgmargin">';
        ?><a href="<?php the_permalink() ?>"><?php
             echo '<h2 class="captionmos">'; the_title();echo '</h2>';
                echo '<img src="'; echo get('image'); echo '" class="img-responsive" >';
              echo '<div class="overlay1"></div>';
        echo '</a>';
        echo '</div>';





    endwhile; endif;
    ?>
        </div>



        <?php

        $wp = query_posts(array(
            'post_type'	=> 'post',
            'meta_key' => 'position',
            'meta_value' => 'right'
        ));
        echo '<div class="col-md-6 colr">';
        if(have_posts()) : while(have_posts()) : the_post();
            echo '<div class="hovereffect1 imgmargin">';
            ?><a href="<?php the_permalink() ?>"><?php
            echo '<h2 class="captionmos">'; the_title();echo '</h2>';
            echo '<img src="'; echo get('image'); echo '" class="img-responsive" >';
            echo '<div class="overlay1"></div>';
            echo '</a>';
            echo '</div>';





        endwhile; endif;
        ?>
    </div>


<!--

    <div class="container container-mos">
        <div class="row">

    <div class="col-md-6 coll">
        <div class="hovereffect1 imgmargin">
            <h2 class="captionmos">Au plus près de l'eau</h2>
            <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/imgmos1.jpg" alt="">
            <div class="overlay1">
            </div>
        </div>

        <div class="hovereffect1">
            <h2 class="captionmos">Application Mobile</h2>
            <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/imgmos2.jpg" alt="">
            <div class="overlay1">
            </div>
        </div>

    </div>

<div class="container-img">
    <div class="col-md-6 colr">
        <div class="hovereffect1 imgmargin">
        <h2 class="captionmos">Hiver -10%</h2>
            <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/imgmos3.jpg" alt="">
            <div class="overlay1">
            </div>
        </div>

        <div class="hovereffect1">
            <h2 class="captionmos">Fini les problèmes de transport !</h2>
            <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/imgmos4.jpg" alt="">
            <div class="overlay1">
            </div>
        </div>

    </div>
</div>
            </div>
    </div>

    -->
</section>

<section id="sec3">
    <div class="container hideme">
        <div class="row">
            <div class="col-md-12 coltext">
                <h2>DERNIERES ANNONCES</h2>
                <hr class="hrwhite">
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

<script>
    $(document).ready(function() {

        /* Every time the window is scrolled ... */
        $(window).scroll( function(){

            /* Check the location of each desired element */
            $('.hideme').each( function(i){

                var bottom_of_object = $(this).position().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();

                /* If the object is completely visible in the window, fade it it */
                if( bottom_of_window > bottom_of_object ){

                    $(this).animate({'opacity':'1'},1000);

                }

            });

        });

    });</script>
</script>



<?php get_footer(); ?>
