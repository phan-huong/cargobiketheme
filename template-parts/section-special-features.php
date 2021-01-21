<?php
// Preload theme settings
$special_features_enable = get_theme_mod('special_features_enable', true);
$special_features_title = get_theme_mod('special_features_title', 'Was macht Cargobike Adventures so besonders?');
$special_features_subtitle = get_theme_mod('special_features_subtitle', 'Gemeinsam entlasten wir Städte, Straßen und den Himmel. Wir bieten euch ein nie dagewesenes Konzept von');
$special_feature_title_1 = get_theme_mod('special_feature_title_1', 'Neueste Modelle');
$special_feature_content_1 = get_theme_mod('special_feature_content_1', 'an Bikes und Zubehör, garantiert frisch gewartet und desinfiziert');
$special_feature_img_1 = get_theme_mod('special_feature_img_1', get_bloginfo('stylesheet_directory').'/assets/img/specialty-wheel.png');
$special_feature_title_2 = get_theme_mod('special_feature_title_2', 'Zentraler Pick-Up & Drop-Off');
$special_feature_content_2 = get_theme_mod('special_feature_content_2', 'im MotionLab Berlin-Treptow');
$special_feature_img_2 = get_theme_mod('special_feature_img_2', get_bloginfo('stylesheet_directory').'/assets/img/specialty-berlin2.png');
$special_feature_title_3 = get_theme_mod('special_feature_title_3', 'Ausführliche Einführung');
$special_feature_content_3 = get_theme_mod('special_feature_content_3', 'in Bike und Equipment bei Anmietung');
$special_feature_img_3 = get_theme_mod('special_feature_img_3', get_bloginfo('stylesheet_directory').'/assets/img/specialty-chair.png');
$special_feature_title_4 = get_theme_mod('special_feature_title_4', 'CO2 neutrales');
$special_feature_content_4 = get_theme_mod('special_feature_content_4', 'und somit emissionsfreies Reisen – so schont ihr die Umwelt');
$special_feature_img_4 = get_theme_mod('special_feature_img_4', get_bloginfo('stylesheet_directory').'/assets/img/specialty-leaf.png');
$special_feature_title_5 = get_theme_mod('special_feature_title_5', 'Nachhaltigkeit und Transparenz');
$special_feature_content_5 = get_theme_mod('special_feature_content_5', 'Alle unsere Partner verschreiben sich in höchstem Maße im Wirtschaftskreislauf');
$special_feature_img_5 = get_theme_mod('special_feature_img_5', get_bloginfo('stylesheet_directory').'/assets/img/specialty-cycle2.png');
?>
<?php if ($special_features_enable) : ?>
<div class="section_wrapper">
    <div class="container">
        <div class="section_title"><?php echo $special_features_title; ?></div>
        <div class="section_excerpt"><?php echo $special_features_subtitle; ?></div>
        <div class="offer_services_wrapper">
            <div class="offer_service1">
                <p><img src="<?php echo $special_feature_img_1; ?>"></p>
                <p><?php echo $special_feature_title_1; ?></p>
                <p><?php echo $special_feature_content_1; ?></p>
            </div>
            <div class="offer_service2">
                <p><img src="<?php echo $special_feature_img_2; ?>"></p>
                <p><?php echo $special_feature_title_2; ?></p>
                <p><?php echo $special_feature_content_2; ?></p>
            </div>
            <div class="offer_service3">
                <p><img src="<?php echo $special_feature_img_3; ?>"></p>
                <p><?php echo $special_feature_title_3; ?></p>
                <p><?php echo $special_feature_content_3; ?></p>
            </div>
            <div class="offer_service4">
                <p><img src="<?php echo $special_feature_img_4; ?>"></p>
                <p><?php echo $special_feature_title_4; ?></p>
                <p><?php echo $special_feature_content_4; ?></p>
            </div>
            <div class="offer_service5">
                <p><img src="<?php echo $special_feature_img_5; ?>"></p>
                <p><?php echo $special_feature_title_5; ?></p>
                <p><?php echo $special_feature_content_5; ?></p>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>