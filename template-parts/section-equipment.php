<?php
// Preload theme settings
$accessories_enable = get_theme_mod('accessories_enable', true);
?>
<?php if ($accessories_enable) : ?>
<div class="section_wrapper">
    <div class="container">
        <div class="section_title">Campingausrüstung und Campingzubehör</div>
        <div class="accessories_wrapper">
            <!-- SHOW PRODUCTS OF CATEGORY "EQUIPMENT" -->
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
                    if ($product_category->name == "Equipment") {
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
                            $product_main_image = $new_product->get_image_id();
                            $product_main_image_url = wp_get_attachment_url($product_main_image);
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
                            <div class="accessories_item" data-toggle="modal" data-target="#accessoriesModal" data-description="">
                                <div class="accessories_item_img">
                                    <img src="<?php echo $product_main_image_url ?>">
                                </div>
                                <div class="accessories_item_title"><?php echo $product_name ?></div>
                                <div class="accessories_item_buttons">
                                    <span class="accessories_item_price"></span>
                                    <button type="button" data-toggle="modal" data-target="#accessoriesModal">Details</button>
                                </div>
                                <div class="accessories_item_description">
                                    <p><?php the_excerpt() ?></p>
                                    <?php
                                    if (count($product_children) > 0) {
                                        if ($product_price !== null) {
                                            ?>
                                            <p><strong>Mietpreise:</strong></p>
                                            <?php
                                            foreach ($product_children as $variation_id) {
                                                $variation = new WC_Product_Variation($variation_id);
                                                $variation_attributes = $variation->get_variation_attributes();
                                                $variation_price = number_format($variation->get_regular_price(), 2, ',', '.');
    
                                                foreach ($variation_attributes as $taxonomy => $term_slug) {
                                                    $new_taxonomy = str_replace("attribute_", "", $taxonomy);
                                                    $new_term = get_term_by('slug', $term_slug, $new_taxonomy);
                                                    $new_name = $new_term->name;
                                                    $attr_values .= $new_name . "^";
                                                }
                                                echo $new_name . ': ' . $variation_price . "<br>";
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="modal fade" id="accessoriesModal" tabindex="-1" role="dialog" aria-labelledby="accessoriesModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accessoriesModalTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button id="accessoriesModalDetailBtn" type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>