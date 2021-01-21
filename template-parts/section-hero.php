
<?php
// Preload theme settings
$default_slider_bkgr = get_bloginfo('stylesheet_directory').'/assets/img/epic1-lg_edited.jpg';
$default_slider_video = get_bloginfo('stylesheet_directory').'/assets/video/cargobike_hero_reel.mp4';
$slider_bkgr = get_theme_mod('slider_background', $default_slider_bkgr);
$caption_text1 = get_theme_mod('caption_text1', get_bloginfo('name'));
$caption_text2 = get_theme_mod('caption_text2', get_bloginfo('description'));
$caption_button_title = get_theme_mod('caption_button_title', 'Vorfreude schenken');
$caption_button_link = get_theme_mod('caption_button_link', '/produkt/gutscheinkarte');
?>
<section id="hero">
    <div class="hero_container">
        <!-- Start video -->
        <img src="<?php echo $slider_bkgr; ?>">
        <video autoplay muted loop id="videoPlayer">
            <source src="<?php echo $default_slider_video; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- End video -->

        <!-- Start caption -->
        <div class="hero_caption carousel-caption">
            <h1>
                <span><?php echo $caption_text1; ?></span><br><?php echo $caption_text2; ?>
            </h1>
            <a href="<?php echo $caption_button_link; ?>"><?php echo $caption_button_title; ?></a>
        </div>
        <!-- End caption -->
    </div>
        <!-- container -->
</section>


