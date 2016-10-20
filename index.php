<?php get_header(); ?>

<section id="sec1">
<div class="container container-search">
    <div class="row">
        <div class="col-xs-12">
            <h2>Trouvez votre bonheur</h2>
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
    <div class="row">
        <div class="col-md-12 coltext">
            <h2>NOS OFFRES</h2>
            <hr class="hrblack">

        </div>
    </div>

<div class="container container-mos">
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
</section>
<section id="sec3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 coltext">
                <h2>DERNIERES ANNONCES</h2>
                <hr class="hrwhite">
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



<?php get_footer(); ?>
