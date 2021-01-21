<?php
// Preload theme settings
$introduction_enable = get_theme_mod('introduction_enable', true);
$introduction_title = get_theme_mod('introduction_title', 'Hallo Abenteurer*innen, herzlich willkommen!');
$introduction_text = get_theme_mod('introduction_text', 'Wir von Cargobike Adventures haben es uns zum Ziel gesetzt, euch mit unseren Premium Lastenrädern und aller feinstem Camping Equipment auf die Reise zu schicken. Ihr mietet bei uns nicht nur Lastenräder, ihr mietet ein Stück Freiheit und das gute Gewissen, umweltschonend CO2 neutral Urlaub zu machen. Stressfrei eure Bikes und das gewünschte Equipment zusammengestellt, kann die Reise auch schon losgehen. Ihr vergnügt euch an der frischen Luft und beschert euch und euren Liebsten eine unvergessliche Zeit in der Natur.');
$introduction_image1 = get_theme_mod('introduction_image1', get_bloginfo('stylesheet_directory').'/assets/img/sleep-side-sm-1_edited.jpg');
$introduction_image2 = get_theme_mod('introduction_image2', get_bloginfo('stylesheet_directory').'/assets/img/square-4-1_edited.jpg');
$introduction_image3 = get_theme_mod('introduction_image3', get_bloginfo('stylesheet_directory').'/assets/img/two-bikes-1_edited.jpg');
$introduction_image4 = get_theme_mod('introduction_image4', get_bloginfo('stylesheet_directory').'/assets/img/two-riding-sm-1_edited.jpg');

$facebook_link = get_theme_mod('facebook_link', 'https://www.facebook.com/sogehtroadtripheute/');
$instagram_link = get_theme_mod('instagram_link', 'https://www.instagram.com/cargobike.adventures/');
?>
<?php if ($introduction_enable) : ?>
<div class="section_wrapper">
    <div class="container">
        <div class="intro_wrapper">
            <div class="intro_text_title">
                <h4><?php echo $introduction_title; ?></h4>
            </div>
            <div class="intro_text_content">
                <p><?php echo $introduction_text; ?></p>
            </div>
            <div class="intro_social_links">
                <?php if (!empty($facebook_link)) : ?>
                <a href="<?php echo $facebook_link; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>
                <?php if (!empty($instagram_link)) : ?>
                <a href="<?php echo $instagram_link; ?>" class="badge social instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                <?php endif; ?>
            </div>
            <div class="intro_slider">
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
    </div>
</div>
<?php endif; ?>