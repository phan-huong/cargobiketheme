<?php
// Preload theme settings
$wicked_background = get_theme_mod('wicked_background', false);
$company_logo = get_theme_mod('general_companylogo', get_bloginfo('stylesheet_directory').'/assets/img/logo_small.png');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <!-- Bootstrap CSS core -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawesome 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Default theme CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Custom theme CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css">
    <!-- Start automatic head of WP -->
    <?php wp_head(); ?>
    <!-- End automatic head of WP -->
</head>
<body class="<?php if ($wicked_background == true) : echo 'wicked_bkgr'; else : echo 'body_bkgr'; endif; ?>">
    <!-- Start header -->
    <header>
        <!-- Start navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <!-- Source: https://www.codeply.com/go/qhaBrcWp3v -->
            <div class="d-flex flex-grow-1">
                <!-- hidden spacer to center brand on mobile -->
                <!-- <span class="w-100 d-lg-none d-block"></span> -->
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                    <img src="<?php echo $company_logo; ?>" alt="<?php bloginfo('name'); ?>">
                    <span><?php bloginfo('name'); ?></span>
                </a>
                <div class="navbar_toggler_container w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav_links">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>

            <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array( 
                        'theme_location' => 'primary',
                        'container_class' => 'collapse navbar-collapse flex-grow-1',
                        'container_id' => 'main_nav_links',
                        'menu_class' => 'navbar-nav ml-auto flex-nowrap'
                    ));
                }
            ?>
        </nav>
        <!-- End navigation bar -->
        
        <?php if (is_front_page()) : ?>
        <!-- Start section hero -->
        <?php get_template_part( 'template-parts/section', 'hero' ); ?>
        <!-- End section hero -->
        <?php endif; ?>
    </header>
    <!-- End header -->