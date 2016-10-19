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
        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/imgcol1.jpg" alt="">
                <div class="colann">
                <h3>1 pièce type loft</h3>
                <p>Séjour lumineux avec grandes baies vitrées</p>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/imgcol2.jpg" alt="">
                <div class="colann">
                <h3>Marre de la solitude ?</h3>
                <p>Hess vous ouvre ses portes</p>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/imgcol3.jpg" alt="">
                <div class="colann">
                <h3>Superbe 2 pièces</h3>
                <p>Exposé plein sud</p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
