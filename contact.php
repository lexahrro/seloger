<?php
/**
 * Template Name: CONTACT
 */


get_header();

?>





<section id="secon1">
<div class="container container-contact">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="section-heading">CONTACT US</h1>
            <hr class="whitehr">
            <p class="section-paragraph">Pole Léonard de Vinci - 12 Avenue Léonard de Vinci, 92400 Courbevoie</p>
        </div>
    </div>
    <?php
    echo do_shortcode("[contact-form-7 id=\"5\" title=\"Formulaire de contact 1\"]");
    ?>
</div>
    </section>
<section id="secon2">
    <div class="container-fluid">
    <div class="row">
        <div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.0254584363715!2d2.23422031567572!3d48.895851979291095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e665002d2c6665%3A0x9595552cb384bd7!2sP%C3%B4le+Universitaire+L%C3%A9onard+de+Vinci!5e0!3m2!1sfr!2sfr!4v1475502359120' width='800' height='400' frameborder='0' style='border:0' allowfullscreen></iframe></div>
    </div>
    <div class="row social">
        <div class="col-md-2 col-sm-2 col-xs-4 text-center">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4 text-center">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4 text-center">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4 text-center">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4 text-center">
            <i class="fa fa-dribbble" aria-hidden="true"></i>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4 text-center">
            <i class="fa fa-git" aria-hidden="true"></i>
        </div>
    </div>
    </div>
</section>

<?php


get_footer();

?>