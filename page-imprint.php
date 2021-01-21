<?php
/**
 * Template Name: Impressum-Seite
 */

// Preload theme settings
$company_name = get_theme_mod('general_companyname');
$street1 = get_theme_mod('general_address1');
$street2 = get_theme_mod('general_address2');
$plz = get_theme_mod('general_plz');
$city = get_theme_mod('general_city');
$tel = get_theme_mod('general_telephone');
$email = get_theme_mod('general_email');
$owner = get_theme_mod('general_owner');
$trade_register = get_theme_mod('general_trade_register');
$tax_id = get_theme_mod('general_tax_id');

$introduction_image1 = get_theme_mod('imprint_page_photo1', get_bloginfo('stylesheet_directory').'/assets/img/square-1.jpg');
$introduction_image2 = get_theme_mod('imprint_page_photo2', get_bloginfo('stylesheet_directory').'/assets/img/square-2.jpg');
$introduction_image3 = get_theme_mod('imprint_page_photo3', get_bloginfo('stylesheet_directory').'/assets/img/square-3.jpg');
$introduction_image4 = get_theme_mod('imprint_page_photo4', get_bloginfo('stylesheet_directory').'/assets/img/square-4.jpg');
?>

<?php get_header(); ?>
<div class="page_wrapper margin_to_top">
    <div class="section_wrapper">
        <div class="container">
            <h1><?php single_post_title(); ?></h1>
        </div>
    </div>
    
    <div class="section_wrapper">
        <div class="container">
            <div class="imprint_wrapper">
                <div class="imprint_info">
                    <?php if (!empty($company_name) && !empty($street1) && !empty($plz) && !empty($city)) : ?>
                    <p>
                        <strong><?php echo $company_name; ?></strong><br>
                        <?php echo $street1; ?>&nbsp;|&nbsp;<?php echo $street2; ?><br>
                        <?php echo $plz; ?>&nbsp;<?php echo $city; ?><br>
                        Deutschland
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($tel)) : ?>
                    <p>
                        <strong>Telefon</strong>: <?php echo $tel; ?>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($email)) : ?>
                    <p>
                        <strong>Email:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($owner)) : ?>
                    <p>
                        <strong>Geschäftsführer:</strong> <?php echo $owner; ?>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($trade_register)) : ?>
                    <p>
                        <strong>Handelsregister:</strong> <?php echo $trade_register; ?>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($tax_id)) : ?>
                    <p>
                        <strong>Umsatzsteuer-ID:</strong> <?php echo $tax_id; ?>
                    </p>
                    <?php endif; ?>
                </div>
                <div class="imprint_slider">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="border-radius: 0.5em;">
                            <?php if (!empty($introduction_image1)) : ?>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo $introduction_image1; ?>">
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($introduction_image2)) : ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo $introduction_image2; ?>">
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($introduction_image3)) : ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo $introduction_image3; ?>">
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($introduction_image4)) : ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo $introduction_image4; ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>