<?php
// Preload theme settings
$company_name = get_theme_mod('general_companyname');
$street1 = get_theme_mod('general_address1');
$street2 = get_theme_mod('general_address2');
$plz = get_theme_mod('general_plz');
$city = get_theme_mod('general_city');
$tel = get_theme_mod('general_telephone');
$email = get_theme_mod('general_email');

$facebook_link = get_theme_mod('facebook_link', 'https://www.facebook.com/sogehtroadtripheute/');
$instagram_link = get_theme_mod('instagram_link', 'https://www.instagram.com/cargobike.adventures/');

$footer_banner_background = get_theme_mod('footer_banner_background', get_bloginfo('stylesheet_directory').'/assets/img/epic2-lg.jpg');
$caption_text = get_theme_mod('footer_caption_text', 'Planen Sie jetzt eine unvergessliche Radtour!');
$caption_button_title = get_theme_mod('footer_caption_button_title', 'Los geht\'s');
$caption_button_link = get_theme_mod('footer_caption_button_link', '/produkt/gutscheinkarte');
?>
    <section id="footer_banner" style="background: url('<?php echo $footer_banner_background; ?>') center no-repeat; background-size: cover;">
        <div class="footer_banner_wrapper">
            <h3><?php echo $caption_text; ?></h3>
            <a href="<?php echo $caption_button_link; ?>"><?php echo $caption_button_title; ?></a>
        </div>
    </section>

    <footer class="bg-dark">
        <div class="container">
            <div class="footer_wrapper">
                <div class="address">
                    <h6>Addresse</h6>
                    <p>
                        <?php echo $company_name; ?><br>
                        <?php echo $street1; ?><br>
                        <?php echo $street2; ?><br>
                        <?php echo $plz; ?>&nbsp;<?php echo $city; ?><br>
                        Deutschland
                    </p>
                </div>
                <div class="contact_info">
                    <h6>Kontakt-Info</h6>
                    <p>
                        <i class="fa fa-phone"></i> <?php echo $tel; ?><br>
                        <i class="fa fa-envelope"></i> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br>
                        <i class="fa fa-clock-o" aria-hidden="true"></i> <span>(Nahezu) jederzeit mit vorheriger Termin&shy;vereinbarung.</span>
                    </p>
                </div>
                <div class="footer_menu">
                    <h6>Hilfreiche Links</h6>
                    <?php 
                        if (has_nav_menu('footer')) {
                            wp_nav_menu(array(
                                'theme_location' => 'footer',
                                'container_class' => 'footer_nav',
                                // 'container_id' => 'main_nav_links',
                                // 'menu_class' => 'navbar-nav ml-auto flex-nowrap'
                            ));
                        }
                    ?>
                </div>
                <div class="payment_method">
                    <h6>Zahlungsmethode</h6>
                    <p>
                        <a href="https://paypal.de" class="badge social_small paypal_on" target="_blank"><i class="fa fa-paypal"></i></a>
                        <a href="https://www.google.de/search?q=Bank%C3%BCberweisung" class="badge social_small euro_on" target="_blank"><i class="fa fa-eur"></i></a>
                    </p>
                </div>
                <div class="social_network">
                    <h6>Soziale Netzwerke</h6>
                    <p>
                        <?php if (!empty($facebook_link)) : ?>
                        <a href="<?php echo $facebook_link; ?>" class="badge social_small facebook_on" target="_blank"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($instagram_link)) : ?>
                        <a href="<?php echo $instagram_link; ?>" class="badge social_small instagram_on" target="_blank"><i class="fa fa-instagram"></i></a>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Start Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- End Bootstrap JS -->
    <!-- Custom theme JS -->
    <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
    <!-- Start automatic JS of WP -->
    <?php wp_footer(); ?>
    <!-- End automatic JS of WP -->
</body>
</html>