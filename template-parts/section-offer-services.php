<?php
// Preload theme settings
$offer_services_enable = get_theme_mod('offer_services_enable', true);
$offer_services_title = get_theme_mod('offer_services_title', 'Was Wir Euch Bieten');
// $offer_services_subtitle = get_theme_mod('offer_services_subtitle', 'Gemeinsam entlasten wir Städte, Straßen und den Himmel. Wir bieten euch ein nie dagewesenes Konzept von');
$offer_service_title_1 = get_theme_mod('offer_service_title_1', 'Premium Lastenräder');
$offer_service_content_1 = get_theme_mod('offer_service_content_1', 'in verschiedenen Konfigurationen mit ausführlicher Einführung');
$offer_service_img_1 = get_theme_mod('offer_service_img_1', get_bloginfo('stylesheet_directory').'/assets/img/offer-bike.png');
$offer_service_title_2 = get_theme_mod('offer_service_title_2', 'Camping Equipment');
$offer_service_content_2 = get_theme_mod('offer_service_content_2', 'das beste für unsere Kunden frei zusammenstellbar');
$offer_service_img_2 = get_theme_mod('offer_service_img_2', get_bloginfo('stylesheet_directory').'/assets/img/offer-tent.png');
$offer_service_title_3 = get_theme_mod('offer_service_title_3', 'Viele Extras');
$offer_service_content_3 = get_theme_mod('offer_service_content_3', 'die euch die Zeit unterwegs versüßen');
$offer_service_img_3 = get_theme_mod('offer_service_img_3', get_bloginfo('stylesheet_directory').'/assets/img/offer-time.png');
$offer_service_title_4 = get_theme_mod('offer_service_title_4', 'Versicherungs&shy;pakete');
$offer_service_content_4 = get_theme_mod('offer_service_content_4', 'für ein rundum sorglos Gefühl im Urlaub');
$offer_service_img_4 = get_theme_mod('offer_service_img_4', get_bloginfo('stylesheet_directory').'/assets/img/offer-vacation.png');
$offer_service_title_5 = get_theme_mod('offer_service_title_5', 'Routenplanung');
$offer_service_content_5 = get_theme_mod('offer_service_content_5', 'Tipps und Tricks rund ums Cargobike');
$offer_service_img_5 = get_theme_mod('offer_service_img_5', get_bloginfo('stylesheet_directory').'/assets/img/offer-direction.png');
?>
<?php if ($offer_services_enable) : ?>
<div class="section_wrapper">
    <div class="container">
        <div class="section_title"><?php echo $offer_services_title; ?></div>
        <div class="offer_services_wrapper">
            <div class="offer_service1">
                <p><img src="<?php echo $offer_service_img_1; ?>"></p>
                <p><?php echo $offer_service_title_1; ?></p>
                <p><?php echo $offer_service_content_1; ?></p>
            </div>
            <div class="offer_service2">
                <p><img src="<?php echo $offer_service_img_2; ?>"></p>
                <p><?php echo $offer_service_title_2; ?></p>
                <p><?php echo $offer_service_content_2; ?></p>
            </div>
            <div class="offer_service3">
                <p><img src="<?php echo $offer_service_img_3; ?>"></p>
                <p><?php echo $offer_service_title_3; ?></p>
                <p><?php echo $offer_service_content_3; ?></p>
            </div>
            <div class="offer_service4">
                <p><img src="<?php echo $offer_service_img_4; ?>"></p>
                <p><?php echo $offer_service_title_4; ?></p>
                <p><?php echo $offer_service_content_4; ?></p>
            </div>
            <div class="offer_service5">
                <p><img src="<?php echo $offer_service_img_5; ?>"></p>
                <p><?php echo $offer_service_title_5; ?></p>
                <p><?php echo $offer_service_content_5; ?></p>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>