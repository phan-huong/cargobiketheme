<?php
// Preload theme settings
$ebike_enable = get_theme_mod('ebike_enable', true);
?>
<?php if ($ebike_enable) : ?>
<!-- Source: https://bbbootstrap.com/snippets/carousel-slider-thumbnails-25493000 -->
<div class="section_wrapper">
    <div class="section_title">Unser E-Bike</div>
    <!-- SHOW PRODUCTS OF CATEGORY "BIKE" -->
    <?php
    // Functions to get Variation Names and Prices
    function getVarName($children, $count) {
        $variation = new WC_Product_Variation($children[$count]);
        $variation_attributes = $variation->get_variation_attributes();

        foreach ($variation_attributes as $taxonomy => $term_slug) {
            $new_taxonomy = str_replace("attribute_", "", $taxonomy);
            $new_term = get_term_by('slug', $term_slug, $new_taxonomy);
            $new_name = $new_term->name;
        }
        echo $new_name;
    }
    function getVarPrice($children, $count) {
        $variation = new WC_Product_Variation($children[$count]);
        $variation_price = floatval($variation->get_regular_price());
        $variation_price_new = number_format($variation_price, 2, ',', '.');
        echo $variation_price_new;
    }
    ?>
    <?php
    // Loop to get categories
    $args = array(
        // 'number'     => $number,
        // 'orderby'    => 'title',
        // 'order'      => 'ASC',
        'hide_empty' => true, //$hide_empty,
        // 'include'    => $ids
    );
    $product_categories = get_terms('product_cat', $args);
    $count = count($product_categories);
    if ( $count > 0 ) {
        foreach ( $product_categories as $product_category ) {
            if ($product_category->name == "Bike") {
                // Loop through to get products of a category
                $args = array(
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            // 'terms' => 'white-wines'
                            'terms' => $product_category->slug
                        )
                    ),
                    'post_type' => 'product',
                    'orderby' => 'ID,',
                    'order' => 'ASC'
                );
                $products = new WP_Query( $args );
                while ( $products->have_posts() ) {
                    $products->the_post();
                    $product_id = get_the_ID();
                    $new_product = wc_get_product($product_id);
                    $sku = $new_product->get_sku();
                    $product_name = $new_product->get_name();
                    $product_price = $new_product->get_price_html();
                    $product_type = $new_product->get_type();
                    $product_images = $new_product->get_gallery_image_ids();
                    $product_image_1 = wp_get_attachment_url($product_images[0]);
                    $product_image_2 = wp_get_attachment_url($product_images[1]);
                    $product_image_3 = wp_get_attachment_url($product_images[2]);
                    $product_children = array();
                    $variation_ids = '';
                    $attr_values = '';
                    $variation_prices = '';
                    if ($product_type == "variable") {
                        $product_children = $new_product->get_children();
                        $formatted_price = number_format($new_product->get_variation_regular_price(), 2, ',', '.');
                        // $product_price = 'ab ' . $new_product->get_variation_price( 'min', true );
                    }
                    ?>
                    <div class="container">
                        <div id="custCarousel-<?php echo $product_id ?>" class="carousel slide custCarousel" data-ride="carousel">
                            <!-- Slider -->
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img src="<?php echo $product_image_1 ?>"></div>
                                <div class="carousel-item"><img src="<?php echo $product_image_2 ?>"></div>
                                <div class="carousel-item"><img src="<?php echo $product_image_3 ?>"></div>
                            </div>
                            <!-- Left right control buttons -->
                            <a class="carousel-control-prev" href="#custCarousel-<?php echo $product_id ?>" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#custCarousel-<?php echo $product_id ?>" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                            <!-- Thumbnails -->
                            <ol class="carousel-indicators list-inline">
                                <li class="list-inline-item active"><a id="carousel-selector-<?php echo $product_id ?>-0" class="selected" data-slide-to="0" data-target="#custCarousel-<?php echo $product_id ?>"><img src="<?php echo $product_image_1 ?>" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a id="carousel-selector-<?php echo $product_id ?>-1" data-slide-to="1" data-target="#custCarousel-<?php echo $product_id ?>"><img src="<?php echo $product_image_2 ?>" class="img-fluid"></a></li>
                                <li class="list-inline-item"><a id="carousel-selector-<?php echo $product_id ?>-2" data-slide-to="2" data-target="#custCarousel-<?php echo $product_id ?>"><img src="<?php echo $product_image_3 ?>" class="img-fluid"></a></li>
                            </ol>
                        </div>
                        <div class="ebike_description_wrapper">
                            <div class="ebike_description_content">
                                <h5><?php echo $product_name ?></h5>
                                <p><?php the_excerpt() ?></p>
                            </div>
                            <div class="ebike_price_list">
                                <h5>Preisliste</h5>
                                <table>
                                    <tr>
                                        <th>Dauer</th>
                                        <th>Miet&shy;preise</th>
                                        <th>Dauer</th>
                                        <th>Miet&shy;preise</th>
                                    </tr>
                                    <?php
                                    if (count($product_children) > 0) {
                                        for ($counter = 0; $counter < count($product_children); $counter++) {
                                            if ($counter % 2 == 0) {
                                                $next = $counter + 1;
                                                if ($next == count($product_children)) {
                                                    ?>
                                                    <th><?php echo getVarName($product_children, $counter) ?></th>
                                                    <td><?php echo getVarPrice($product_children, $counter) ?></td>
                                                    <th></th>
                                                    <td></td>
                                                    <?php
                                                } else {
                                                ?>
                                                <tr>
                                                    <th><?php echo getVarName($product_children, $counter) ?></th>
                                                    <td><?php echo getVarPrice($product_children, $counter) ?></td>
                                                    <th><?php echo getVarName($product_children, $next) ?></th>
                                                    <td><?php echo getVarPrice($product_children, $next) ?></td>
                                                </tr>
                                                <?php
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </table>
                                <p class="ebike_price_notice">
                                    Versicherung: ENRA Premiumschutz Europaweit inkl. 24/7 Hotline und Pick-Up Service
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="container">
                    <h5>Versicherungen</h5>
                    <div class="ebike_price_list">
                        <table>
                            <tr>
                                <th></th>
                                <th>ENRA BASIC</th>
                                <th>ENRA PREMIUM</th>
                            </tr>
                            <tr>
                                <th>Diebstahlschutz</th>
                                <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th>Teilediebstahl</th>
                                <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th>Vandalismus</th>
                                <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th>Reparaturschutz</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                                <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th>Pick-up-service</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                                <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th>Weekend</th>
                                <td>15,00 €</td>
                                <td>30,00 €</td>
                            </tr>
                            <tr>
                                <th>Danach pro Tag</th>
                                <td>3,00 €</td>
                                <td>7,50 €</td>
                            </tr>
                            <tr>
                                <th>Ab 7 Tagen pro Tag</th>
                                <td>2,00 €</td>
                                <td>6,50 €</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php
            }
        }
    }
    ?>
</div>
<?php endif; ?>