<?php get_header(); ?>
<?php
// Preload theme settings
?>
<div class="page_wrapper">
    <!-- Start notice -->
    <?php get_template_part( 'template-parts/section', 'notice' ); ?>
    <!-- End notice -->

    <!-- Start introduction -->
    <?php get_template_part( 'template-parts/section', 'introduction' ); ?>
    <!-- End introduction -->

    <!-- Start offer services -->
    <?php get_template_part( 'template-parts/section', 'offer-services' ); ?>
    <!-- End offer services -->

    <!-- Start E-Bike -->
    <?php get_template_part( 'template-parts/section', 'ebike' ); ?>
    <!-- End E-Bike -->
    
    <!-- Start accessories -->
    <?php get_template_part( 'template-parts/section', 'accessories' ); ?>
    <!-- End accessories -->

    <!-- Start special features -->
    <?php get_template_part( 'template-parts/section', 'special-features' ); ?>
    <!-- End special features -->

    <!-- Start premium services-->
    <?php get_template_part( 'template-parts/section', 'premium-services' ); ?>
    <!-- End premium services-->
</div>
<?php get_footer(); ?>