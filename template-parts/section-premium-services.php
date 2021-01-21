<?php
// Preload theme settings
$premium_services_enable = get_theme_mod('premium_services_enable', true);
$premium_services_title = get_theme_mod('premium_services_title', 'Wie definieren wir Premium Service?');
$premium_service_title_1 = get_theme_mod('premium_services_title_1', 'Von der persönlichen Übergabe eures gebuchten Bikes+Equipment bis zur Rückgabe – hier trefft ihr die Gründer noch mit Putz&shy;lappen und Staubwedel');

$premium_service_img_1 = get_theme_mod('premium_service_img_1', get_bloginfo('stylesheet_directory').'/assets/img/clean.svg');
$premium_service_title_2 = get_theme_mod('premium_service_title_2', 'Wir sind Radreisende wie Ihr und für euch da, telefonisch oder per Mail');

$premium_service_img_2 = get_theme_mod('premium_service_img_2', get_bloginfo('stylesheet_directory').'/assets/img/group.svg');
$premium_service_title_3 = get_theme_mod('premium_service_title_3', 'Nach voriger Termin&shy;vereinbarung könnt Ihr uns im MotionLab besuchen kommen und euch ein Bild von unserem Angebot machen. Wir haben Gesichter und die zeigen wir gern. Persönlicher Kontakt ist uns wichtig');

$premium_service_img_3 = get_theme_mod('premium_service_img_3', get_bloginfo('stylesheet_directory').'/assets/img/door.svg');
?>
<?php if ($premium_services_enable) : ?>
<div class="section_wrapper">
    <div class="container">
        <div class="section_title"><?php echo $premium_services_title; ?></div>
        <div class="premium_service_wrapper">
            <div class="premium_service1">
                <p><img src="<?php echo $premium_service_img_1; ?>"></p>
                <p><?php echo $premium_service_title_1; ?></p>
            </div>
            <div class="premium_service2">
                <p><img src="<?php echo $premium_service_img_2; ?>"></p>
                <p><?php echo $premium_service_title_2; ?></p>
            </div>
            <div class="premium_service3">
                <p><img src="<?php echo $premium_service_img_3; ?>"></p>
                <p><?php echo $premium_service_title_3; ?></p>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>