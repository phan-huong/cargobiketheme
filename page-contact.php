<?php
/**
 * Template Name: Kontakt-Seite
 */

// Preload theme settings
$info_layout = get_theme_mod('contact_page_layout', 'detail_left');
$content_pos = get_theme_mod('contact_page_content_pos', 'after');
$show_map = get_theme_mod('contact_page_enable_map', false);
$street1 = get_theme_mod('general_address1');
$street2 = get_theme_mod('general_address2');
$plz = get_theme_mod('general_plz');
$city = get_theme_mod('general_city');
$tel = get_theme_mod('general_telephone');
$email = get_theme_mod('general_email');
$photo = get_theme_mod('contact_page_photo', get_bloginfo('stylesheet_directory').'/assets/img/contact-ppl2.jpg');
?>

<?php get_header(); ?>
<div class="page_wrapper margin_to_top">
    <div class="section_wrapper">
        <div class="container">
            <h1><?php single_post_title(); ?></h1>
        </div>
    </div>
    <?php if ($content_pos == 'before') : ?>
    <div class="section_wrapper">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="section_wrapper">
        <div class="container">
            <div class="contact_wrapper <?php if ($info_layout == 'detail_left') : echo 'contact_wrapper_left'; else : echo 'contact_wrapper_right'; endif; ?>">
                <div class="address">
                    <h3><i class="fa fa-map-marker"></i> Adresse</h3>
                    <p>
                        <?php echo $street1; ?>&nbsp;|&nbsp;<?php echo $street2; ?><br>
                        <?php echo $plz; ?>&nbsp;<?php echo $city; ?><br>
                        Deutschland
                    </p>
                </div>
                <div class="telephone">
                    <h3><i class="fa fa-phone"></i> Telefon</h3>
                    <p><?php echo $tel; ?></p>
                </div>
                <div class="email">
                    <h3><i class="fa fa-envelope"></i> Email</h3>
                    <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                </div>
                <div class="map">
                    <?php if ($show_map) : ?>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=MORE%20Cargobike%20GmbH&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                    <?php else : ?>
                    <img src="<?php echo $photo; ?>" alt="<?php bloginfo('name'); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
 
    <?php if ($content_pos == 'after') : ?>
    <div class="section_wrapper">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>