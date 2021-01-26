<?php
// Preload theme settings
$ebike_enable = get_theme_mod('ebike_enable', true);
?>
<?php if ($ebike_enable) : ?>
<!-- Source: https://bbbootstrap.com/snippets/carousel-slider-thumbnails-25493000 -->
<div class="section_wrapper">
    <div class="container">
        <div class="section_title">Unser E-Bike</div>
        <div id="custCarousel" class="carousel slide" data-ride="carousel">
            <!-- Slider -->
            <div class="carousel-inner">
                <div class="carousel-item active"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/img/bike1.jpg"></div>
                <div class="carousel-item"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/img/epic0-lg.jpg"></div>
                <div class="carousel-item"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/img/correct-bike.jpg"></div>
            </div>
            <!-- Left right control buttons -->
            <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            <!-- Thumbnails -->
            <ol class="carousel-indicators list-inline">
                <li class="list-inline-item active"><a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/img/bike1.jpg" class="img-fluid"></a></li>
                <li class="list-inline-item"><a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/img/epic0-lg.jpg" class="img-fluid"></a></li>
                <li class="list-inline-item"><a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/img/correct-bike.jpg" class="img-fluid"></a></li>
            </ol>
        </div>
        <div class="ebike_description_wrapper">
            <div class="ebike_description_content">
                <h5>Riese & Müller Load75</h5>
                <p>Das Load 75 aus dem Hause Riese & Müller ist ein Lastenrad der absoluten Oberklasse. Der leistungsstarke Bosch Motor bietet euch 4 verschiedene Unterstützungen, eine stufenlose Enviolo Schaltung, einen nahezu unverwüstbaren Carbonriemen und ist für maximalen Komfort voll gefedert. Ein rundum angenehmes, sicheres und gleichzeitig sehr spaßiges Fahrgefühl. Die Dual-Battery Bauart mit 1.000 KWh ermöglicht lange Touren auch in entlegene Gegenden mit bis zu 200km Reichweite.</p>
            </div>
            <div class="ebike_price_list">
                <h5>Preisliste</h5>
                <table>
                    <tr>
                        <th>Dauer</th>
                        <th>Miet&shy;preise</th>
                        <th>Versicherungs&shy;kosten</th>
                    </tr>
                    <tr>
                        <td>3 Tage</td>
                        <td>149,-€</td>
                        <td>15,-€</td>
                    </tr>
                    <tr>
                        <td>4 Tage</td>
                        <td>199,-€</td>
                        <td>20,-€</td>
                    </tr>
                    <tr>
                        <td>7 Tage</td>
                        <td>299,-€</td>
                        <td>35,-€</td>
                    </tr>
                    <tr>
                        <td>14 Tage</td>
                        <td>499,-€</td>
                        <td>70,-€</td>
                    </tr>
                </table>
                <p class="ebike_price_notice">
                    Versicherung: ENRA Premiumschutz Europaweit inkl. 24/7 Hotline und Pick-Up Service
                </p>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>