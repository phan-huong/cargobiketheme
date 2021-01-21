<?php get_header(); ?>
<div class="page_wrapper margin_to_top">
    <div class="section_wrapper">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="section_wrapper">
        <div class="container">
            <?php
            if (have_posts()) :
                the_content();
            else :
                echo '<h1>Nothing here</h1>';
            endif;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>