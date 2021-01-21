<?php
    function cbt_customize_register($wp_customize) {
        /** Index
         * GENERAL panel
         *      Company info
         *          Company logo
         *          Company name textfield
         *          Address 1 textfield
         *          Address 2 textfield
         *          Postal code textfield
         *          City textfield
         *          Telephone textfield
         *          Email textfield
         *          Owner
         *          Trade register
         *          Tax-ID
         *      Background
         *          Wicked background?
         *      Social networks
         *          Facebook
         *          Instagram
         * 
         * HEADER section
         *      Slider background
         *      Caption text 1
         *      Caption text 2
         *      Caption button title
         *      Caption button link
         * 
         * FOOTER section
         *      Banner background
         *      Caption text
         *      Caption button title
         *      Caption button link
         * 
         * PAGES panel
         *      Front page
         *          Enable notice?
         *          Notice type
         *          Notice content
         *          Enable introduction?
         *          Introduction title
         *          Introduction text
         *          Introduction Image 1
         *          Introduction Image 2
         *          Introduction Image 3
         *          Introduction Image 4
         *          Enable offer services?
         *          Enable E-Bike?
         *          Enable accessories?
         *          Enable special features?
         *          Enable premium services?
         *      Contact page
         *          Contact page layout
         *          Contact page content position
         *          Contact page enable map
         *          Contact page photo
         *      Imprint page
         *          Slider photo 1
         *          Slider photo 2
         *          Slider photo 3
         *          Slider photo 4
         */

        /* ========================= GENERAL panel ========================= */
        $wp_customize->add_panel('general_panel', array(
            'title'         => __('Allgemein', 'cargobiketheme'),
            'description'   => __('Allgemeine Einstellungen der Webseite', 'cargobiketheme'),
            'capability'    => 'edit_theme_options',
            'priority'      => 0
        ));
        /* ------------------------- Company info -------------------------- */
        $wp_customize->add_section('general_section', array(
            'title'         => __('Firmeninfo', 'cargobiketheme'),
            'description'   => sprintf(__('Informationen deiner Firma', 'cargobiketheme')),
            'panel'         => 'general_panel',
            'priority'      => 0
        ));

        // Company logo
        $wp_customize->add_setting('general_companylogo', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/logo_small.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'general_companylogo_control',
            array(
                'label'         => __('Logo der Firma', 'cargobiketheme'),
                'section'       => 'general_section',
                'settings'      => 'general_companylogo',
                'priority'      => 0
            )
        ));

        // Company name textfield
        $wp_customize->add_setting('general_companyname', array(
            'default'       => get_bloginfo('name'),
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('general_companyname', array(
            'label'         => __('Firmenname', 'cargobiketheme'),
            'section'       => 'general_section',
            'priority'      => 1
        ));

        // Address 1 textfield
        $wp_customize->add_setting('general_address1', array(
            'default'       => '',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('general_address1', array(
            'label'         => __('Adresszeile 1', 'cargobiketheme'),
            'section'       => 'general_section',
            'priority'      => 2
        ));

        // Address 2 textfield
        $wp_customize->add_setting('general_address2', array(
            'default'       => '',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('general_address2', array(
            'label'         => __('Adresszeile 2', 'cargobiketheme'),
            'section'       => 'general_section',
            'priority'      => 3
        ));

        // Postal code textfield
        $wp_customize->add_setting('general_plz', array(
            'default'       => '',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('general_plz', array(
            'label'         => __('Postleitzahl', 'cargobiketheme'),
            'section'       => 'general_section',
            'priority'      => 4
        ));

        // City textfield
        $wp_customize->add_setting('general_city', array(
            'default'       => '',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('general_city', array(
            'label'         => __('Ort', 'cargobiketheme'),
            'section'       => 'general_section',
            'priority'      => 5
        ));

        // Telephone textfield
        $wp_customize->add_setting('general_telephone', array(
            'default'       => '',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('general_telephone', array(
            'label'         => __('Telefone', 'cargobiketheme'),
            'section'       => 'general_section',
            'priority'      => 6
        ));

        // Email textfield
        $wp_customize->add_setting('general_email', array(
            'default'           => '',
            'type'              => 'theme_mod',
            'sanitize_callback' => 'sanitize_email_address'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'general_email_control', 
            array(
                'label'         => __('Email-Adresse', 'cargobiketheme'),
                'section'       => 'general_section',
                'settings'      => 'general_email',
                'type'          => 'email',
                'priority'      => 6
            )
        ));

        // Owner
        $wp_customize->add_setting('general_owner', array(
            'default'       => '',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('general_owner', array(
            'label'         => __('Geschäftsführer', 'cargobiketheme'),
            'section'       => 'general_section',
            'priority'      => 7
        ));

        // Trade register
        $wp_customize->add_setting('general_trade_register', array(
            'default'       => '',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('general_trade_register', array(
            'label'         => __('Handelsregister', 'cargobiketheme'),
            'section'       => 'general_section',
            'priority'      => 8
        ));

        // Tax-ID
        $wp_customize->add_setting('general_tax_id', array(
            'default'       => '',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('general_tax_id', array(
            'label'         => __('Umsatzsteuer-ID', 'cargobiketheme'),
            'section'       => 'general_section',
            'priority'      => 9
        ));


        /* -------------------------- Background --------------------------- */
        $wp_customize->add_section('background_section', array(
            'title'         => __('Hintergrund', 'cargobiketheme'),
            'description'   => sprintf(__('Hintergrund der Webseite anpassen', 'cargobiketheme')),
            'panel'         => 'general_panel',
            'priority'      => 1
        ));

        // Wicked background?
        $wp_customize->add_setting('wicked_background', array(
            'default'       => false,
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'wicked_background_control',
            array(
                'label'         => __('Witziger Hintergrund?', 'cargobiketheme'),
                'section'       => 'background_section',
                'settings'      => 'wicked_background',
                'type'          => 'checkbox',
                'priority'      => 1
            )
        ));

        /* ----------------------- Social networks ------------------------- */
        $wp_customize->add_section('social_networks_section', array(
            'title'         => __('Externe Links / Soziale Netwerke', 'cargobiketheme'),
            'panel'         => 'general_panel',
            'priority'      => 2
        ));

        // Facebook
        $wp_customize->add_setting('facebook_link', array(
            'default'           => 'https://www.facebook.com/sogehtroadtripheute/',
            'type'              => 'theme_mod',
            'sanitize_callback' => 'sanitize_the_url'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'facebook_link_control',
            array(
                'label'         => __('Facebook Link', 'cargobiketheme'),
                'section'       => 'social_networks_section',
                'settings'      => 'facebook_link',
                'type'          => 'url',
                'priority'      => 0
            )
        ));

        // Instagram
        $wp_customize->add_setting('instagram_link', array(
            'default'           => 'https://www.instagram.com/cargobike.adventures/',
            'type'              => 'theme_mod',
            'sanitize_callback' => 'sanitize_the_url'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'instagram_link_control',
            array(
                'label'         => __('Instagram Link', 'cargobiketheme'),
                'section'       => 'social_networks_section',
                'settings'      => 'instagram_link',
                'type'          => 'url',
                'priority'      => 1
            )
        ));
        
        /* ======================== HEADER section ========================= */
        $wp_customize->add_section('header_section', array(
            'title'         => __('Kopfzeile', 'cargobiketheme'),
            'description'   => __('Einstellungen der Kopfzeile', 'cargobiketheme'),
            'priority'      => 1
        ));

        // Slider video
        // $wp_customize->add_setting('slider_video', array(
        //     'default'       => get_bloginfo('stylesheet_directory').'/assets/video/cargobike_hero_reel.mp4',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control(new WP_Customize_Media_Control(
        //     $wp_customize,
        //     'slider_video_control',
        //     array(
        //         'label'         => __('Video', 'cargobiketheme'),
        //         'section'       => 'header_section',
        //         'settings'      => 'slider_video',
        //         'mime_type'     => 'video',
        //         'button_labels' => array(
        //             'select'        => __('Video auswählen'),
        //             'change'        => __('Video ändern'),
        //             'default'       => __('Standard'),
        //             'remove'        => __('Entfernen'),
        //             'placeholder'   => __('Kein Video ausgewählt'),
        //             'frame_title'   => __('Datei auswählen'),
        //             'frame_button'  => __('Datei auswählen'),
        //         ),
        //         'priority'      => 0
        //     )
        // ));

        // Slider background
        $wp_customize->add_setting('slider_background', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/epic1-lg_edited.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'slider_background_control',
            array(
                'label'         => __('Hintergrund', 'cargobiketheme'),
                'section'       => 'header_section',
                'settings'      => 'slider_background',
                'priority'      => 1
            )
        ));

        // Caption text 1
        $wp_customize->add_setting('caption_text1', array(
            'default'       => get_bloginfo('name'),
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('caption_text1', array(
            'label'         => __('Überschrift 1', 'cargobiketheme'),
            'section'       => 'header_section',
            'priority'      => 2
        ));

        // Caption text 2
        $wp_customize->add_setting('caption_text2', array(
            'default'       => get_bloginfo('description'),
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('caption_text2', array(
            'label'         => __('Überschrift 2', 'cargobiketheme'),
            'section'       => 'header_section',
            'priority'      => 3
        ));

        // Caption button title
        $wp_customize->add_setting('caption_button_title', array(
            'default'       => 'Vorfreude schenken',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('caption_button_title', array(
            'label'         => __('Knopf-Titel', 'cargobiketheme'),
            'section'       => 'header_section',
            'priority'      => 4
        ));

        // Caption button link
        $wp_customize->add_setting('caption_button_link', array(
            'default'       => '/produkt/gutscheinkarte',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('caption_button_link', array(
            'label'         => __('Knopf-Link', 'cargobiketheme'),
            'section'       => 'header_section',
            'priority'      => 5
        ));

        /* ======================== FOOTER section ========================= */
        $wp_customize->add_section('footer_section', array(
            'title'         => __('Fußzeile', 'cargobiketheme'),
            'description'   => __('Einstellungen der Fußzeile', 'cargobiketheme'),
            'priority'      => 1
        ));

        // Banner background
        $wp_customize->add_setting('footer_banner_background', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/epic2-lg.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'footer_banner_background_control',
            array(
                'label'         => __('Banner-Bild', 'cargobiketheme'),
                'section'       => 'footer_section',
                'settings'      => 'footer_banner_background',
                'priority'      => 0
            )
        ));

        // Caption text
        $wp_customize->add_setting('footer_caption_text', array(
            'default'       => get_bloginfo('description'),
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('footer_caption_text', array(
            'label'         => __('Überschrift', 'cargobiketheme'),
            'section'       => 'footer_section',
            'priority'      => 1
        ));

        // Caption button title
        $wp_customize->add_setting('footer_caption_button_title', array(
            'default'       => 'Los geht\'s',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('footer_caption_button_title', array(
            'label'         => __('Knopf-Titel', 'cargobiketheme'),
            'section'       => 'footer_section',
            'priority'      => 2
        ));

        // Caption button link
        $wp_customize->add_setting('footer_caption_button_link', array(
            'default'       => '/produkt/gutscheinkarte',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('footer_caption_button_link', array(
            'label'         => __('Knopf-Link', 'cargobiketheme'),
            'section'       => 'footer_section',
            'priority'      => 3
        ));


        /* ========================== PAGES panel ========================== */
        $wp_customize->add_panel('pages_panel', array(
            'title'         => __('Seiten', 'cargobiketheme'),
            'description'   => __('Spezifische Seiten anpassen', 'cargobiketheme'),
            'capability'    => 'edit_theme_options',
            'priority'      => 2
        ));

        /* -------------------------- Front page --------------------------- */
        $wp_customize->add_section('front_page_section', array(
            'title'         => __('Startseite', 'cargobiketheme'),
            'panel'         => 'pages_panel',
            'priority'      => 0
        ));
        // Enable notice?
        $wp_customize->add_setting('notice_enable', array(
            'default'       => true,
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'notice_enable_control',
            array(
                'label'         => __('Hinweis anzeigen?', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'notice_enable',
                'type'          => 'checkbox',
                'priority'      => 0
            )
        ));
        // Notice type
        $wp_customize->add_setting('notice_type', array(
            'default'       => 'danger',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'notice_type_control',
            array(
                'label'         => __('Hinweis-Typ', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'notice_type',
                'type'          => 'select',
                'choices'       => array(
                    'success'   => __('Success'),
                    'info'      => __('Info'),
                    'warning'   => __('Warning'),
                    'danger'    => __('Danger')
                ),
                'priority'      => 1
            )
        ));
        // Notice content
        $wp_customize->add_setting('notice_content', array(
            'default'       => 'Eine Buchung wird möglich sein, sobald die allgemeine Lage eine zuverlässige Planung zulässt. Gerne könnt ihr uns schon per Mail einen Termin schicken und wir reservieren den Zeitraum unverbindlich.',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'notice_content_control',
            array(
                'label'         => __('Hinweis-Inhalt', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'notice_content',
                'type'          => 'textarea',
                'priority'      => 2
            )
        ));
        // Enable introduction?
        $wp_customize->add_setting('introduction_enable', array(
            'default'       => true,
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'introduction_enable_control',
            array(
                'label'         => __('Vorstellung-Texte anzeigen?', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'introduction_enable',
                'type'          => 'checkbox',
                'priority'      => 3
            )
        ));
        // Introduction title
        $wp_customize->add_setting('introduction_title', array(
            'default'       => 'Hallo Abenteurer*innen, herzlich willkommen!',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('introduction_title', array(
            'label'         => __('Vorstellung-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'priority'      => 4
        ));
        // Introduction text
        $wp_customize->add_setting('introduction_text', array(
            'default'       => 'Wir von Cargobike Adventures haben es uns zum Ziel gesetzt, euch mit unseren Premium Lastenrädern und aller feinstem Camping Equipment auf die Reise zu schicken. Ihr mietet bei uns nicht nur Lastenräder, ihr mietet ein Stück Freiheit und das gute Gewissen, umweltschonend CO2 neutral Urlaub zu machen. Stressfrei eure Bikes und das gewünschte Equipment zusammengestellt, kann die Reise auch schon losgehen. Ihr vergnügt euch an der frischen Luft und beschert euch und euren Liebsten eine unvergessliche Zeit in der Natur.',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'introduction_text_control',
            array(
                'label'         => __('Vorstellung-Texte', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'introduction_text',
                'type'          => 'textarea',
                'priority'      => 5
            )
        ));
        // Introduction Image 1
        $wp_customize->add_setting('introduction_image1', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/sleep-side-sm-1_edited.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'introduction_image1_control',
            array(
                'label'         => __('Vorstellung-Bild 1', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'introduction_image1',
                'priority'      => 6
            )
        ));
        // Introduction Image 2
        $wp_customize->add_setting('introduction_image2', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/square-4-1_edited.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'introduction_image2_control',
            array(
                'label'         => __('Vorstellung-Bild 2', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'introduction_image2',
                'priority'      => 7
            )
        ));
        // Introduction Image 3
        $wp_customize->add_setting('introduction_image3', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/two-bikes-1_edited.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'introduction_image3_control',
            array(
                'label'         => __('Vorstellung-Bild 3', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'introduction_image3',
                'priority'      => 8
            )
        ));
        // Introduction Image 4
        $wp_customize->add_setting('introduction_image4', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/two-riding-sm-1_edited.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'introduction_image4_control',
            array(
                'label'         => __('Vorstellung-Bild 4', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'introduction_image4',
                'priority'      => 9
            )
        ));

        // Enable offer services?
        $wp_customize->add_setting('offer_services_enable', array(
            'default'       => true,
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'offer_services_enable_control',
            array(
                'label'         => __('Service-Angebot anzeigen?', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'offer_services_enable',
                'type'          => 'checkbox',
                'priority'      => 10
            )
        ));

        // Enable E-Bike?
        $wp_customize->add_setting('ebike_enable', array(
            'default'       => true,
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'ebike_enable_control',
            array(
                'label'         => __('E-Bike anzeigen?', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'ebike_enable',
                'type'          => 'checkbox',
                'priority'      => 11
            )
        ));

        // Enable accessories?
        $wp_customize->add_setting('accessories_enable', array(
            'default'       => true,
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'accessories_enable_control',
            array(
                'label'         => __('Zubehör anzeigen?', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'accessories_enable',
                'type'          => 'checkbox',
                'priority'      => 12
            )
        ));
         // Enable special features?
         $wp_customize->add_setting('special_features_enable', array(
            'default'       => true,
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'special_features_enable_control',
            array(
                'label'         => __('Besondere Services anzeigen?', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'special_features_enable',
                'type'          => 'checkbox',
                'priority'      => 13
            )
        ));
        // Enable premium services?
        $wp_customize->add_setting('premium_services_enable', array(
            'default'       => true,
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'premium_services_enable_control',
            array(
                'label'         => __('Premium-Services anzeigen?', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'premium_services_enable',
                'type'          => 'checkbox',
                'priority'      => 14
            )
        ));

        
        //-------------------------------- section offer services START --------------------------------------
         // offer services title
         $wp_customize->add_setting('offer_services_title', array(
            'default'       =>  'Was Wir Euch Bieten',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_services_title', array(
            'label'         => __('Section-Bieten-Services-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_services_title',
            'priority'      => 15
        ));
        
         // offer service 1 title
         $wp_customize->add_setting('offer_service_title_1', array(
            'default'       => 'Premium Lastenräder',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_service_title_1', array(
            'label'         => __('Bieten_Angebot-1-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_service_title_1',
            'priority'      => 16
        ));
         //  offer service 1 content
         $wp_customize->add_setting('offer_service_content_1', array(
            'default'       => 'in verschiedenen Konfigurationen mit ausführlicher Einführung',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_service_content_1', array(
            'label'         => __('Bieten_Angebot-1-Inhalt', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_service_content_1',
            'type'          => 'textarea',
            'priority'      => 17
        ));
        // offer service 1 image
        $wp_customize->add_setting('offer_service_img_1', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/offer-bike.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'offer_service_img_1_control',
            array(
                'label'         => __('Bieten_Angebot-1-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'offer_service_img_1',
                'priority'      => 18
            )
        ));
        // offer service 2 title
        $wp_customize->add_setting('offer_service_title_2', array(
            'default'       => 'Camping Equipment',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_service_title_2', array(
            'label'         => __('Bieten_Angebot-2-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_service_title_2',
            'priority'      => 19
        ));
         //  offer service 2 content
         $wp_customize->add_setting('offer_service_content_2', array(
            'default'       => 'das beste für unsere Kunden frei zusammenstellbar',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_service_content_2', array(
            'label'         => __('Bieten_Angebot-2-Inhalt', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_service_content_2',
            'type'          => 'textarea',
            'priority'      => 20
        ));
        // offer service 2 image
        $wp_customize->add_setting('offer_service_img_2', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/offer-tent.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'offer_service_img_2_control',
            array(
                'label'         => __('Bieten_Angebot-2-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'offer_service_img_2',
                'priority'      => 21
            )
        ));
         // offer service 3 title
         $wp_customize->add_setting('offer_service_title_3', array(
            'default'       => 'Viele Extras',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_service_title_3', array(
            'label'         => __('Bieten_Angebot-3-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_service_title_3',
            'priority'      => 22
        ));
         //  offer service 3 content
         $wp_customize->add_setting('offer_service_content_3', array(
            'default'       => 'die euch die Zeit unterwegs versüßen',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_service_content_3', array(
            'label'         => __('Bieten_Angebot-3-Inhalt', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_service_content_3',
            'type'          => 'textarea',
            'priority'      => 23
        ));
        // offer service 3 image
        $wp_customize->add_setting('offer_service_img_3', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/offer-time.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'offer_service_img_3_control',
            array(
                'label'         => __('Bieten_Angebot-3-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'offer_service_img_3',
                'priority'      => 24
            )
        ));
         // offer service 4 title
         $wp_customize->add_setting('offer_service_title_4', array(
            'default'       => 'Versicherungs&shy;pakete',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_service_title_4', array(
            'label'         => __('Bieten_Angebot-4-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_service_title_4',
            'priority'      => 25
        ));
         //  offer service 4 content
         $wp_customize->add_setting('offer_service_content_4', array(
            'default'       => 'für ein rundum sorglos Gefühl im Urlaub',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_service_content_4', array(
            'label'         => __('Bieten_Angebot-4-Inhalt', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_service_content_4',
            'type'          => 'textarea',
            'priority'      => 26
        ));
        // offer service 4 image
        $wp_customize->add_setting('offer_service_img_4', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/offer-vacation.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'offer_service_img_4_control',
            array(
                'label'         => __('Bieten_Angebot-4-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'offer_service_img_4',
                'priority'      => 27
            )
        ));
         // offer service 5 title
         $wp_customize->add_setting('offer_service_title_5', array(
            'default'       => 'Routenplanung',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_service_title_5', array(
            'label'         => __('Bieten_Angebot-5-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_service_title_5',
            'priority'      => 28
        ));
         //  offer service 5 content
         $wp_customize->add_setting('offer_service_content_5', array(
            'default'       => 'Tipps und Tricks rund ums Cargobike',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('offer_service_content_5', array(
            'label'         => __('Bieten_Angebot-5-Inhalt', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'offer_service_content_5',
            'type'          => 'textarea',
            'priority'      => 29
        ));
        // offer service 5 image
        $wp_customize->add_setting('offer_service_img_5', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/offer-direction.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'offer_service_img_5_control',
            array(
                'label'         => __('Bieten_Angebot-5-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'offer_service_img_5',
                'priority'      => 30
            )
        ));
         //-------------------------------- section offer services END --------------------------------------
        
        //-------------------------------- section services START--------------------------------------
       
        // special features title
        $wp_customize->add_setting('special_features_title', array(
            'default'       =>  'Was macht Cargobike Adventures so besonders?',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_features_title', array(
            'label'         => __('Section-Besonder-Services-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_features_title',
            'priority'      => 31
        ));
         // special features subtitle
         $wp_customize->add_setting('special_features_subtitle', array(
            'default'       => 'Gemeinsam entlasten wir Städte, Straßen und den Himmel. Wir bieten euch ein nie dagewesenes Konzept von',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_features_subtitle', array(
            'label'         => __('Section-Besonder-Services-subtitel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_features_subtitle',
            'type'          => 'textarea',
            'priority'      => 32
        ));
         // special feature 1 title
         $wp_customize->add_setting('special_feature_title_1', array(
            'default'       => 'Neueste Modelle',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_feature_title_1', array(
            'label'         => __('Besonder-Service-1-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_feature_title_1',
            'priority'      => 33
        ));
         //  special feature 1 content
         $wp_customize->add_setting('special_feature_content_1', array(
            'default'       => 'an Bikes und Zubehör, garantiert frisch gewartet und desinfiziert',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_feature_content_1', array(
            'label'         => __('Besonder-Service-1-Inhalt', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_feature_content_1',
            'type'          => 'textarea',
            'priority'      => 34
        ));
        // special feature 1 image
        $wp_customize->add_setting('special_feature_img_1', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/specialty-wheel.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'special_feature_img_1_control',
            array(
                'label'         => __('Besonder-Service-1-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'special_feature_img_1',
                'priority'      => 35
            )
        ));
        // special feature 2 title
        $wp_customize->add_setting('special_feature_title_2', array(
            'default'       => 'Zentraler Pick-Up & Drop-Off',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_feature_title_2', array(
            'label'         => __('Besonder-Service-2-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_feature_title_2',
            'priority'      => 36
        ));
         //  special feature 2 content
         $wp_customize->add_setting('special_feature_content_2', array(
            'default'       => 'im MotionLab Berlin-Treptow',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_feature_content_2', array(
            'label'         => __('Besonder-Service-2-Inhalt', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_feature_content_2',
            'type'          => 'textarea',
            'priority'      => 37
        ));
        // special feature 2 image
        $wp_customize->add_setting('special_feature_img_2', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/specialty-berlin2.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'special_feature_img_2_control',
            array(
                'label'         => __('Besonder-Service-2-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'special_feature_img_2',
                'priority'      => 38
            )
        ));
         // special feature 3 title
         $wp_customize->add_setting('special_feature_title_3', array(
            'default'       => 'Ausführliche Einführung',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_feature_title_3', array(
            'label'         => __('Besonder-Service-3-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_feature_title_3',
            'priority'      => 39
        ));
         //  special feature 3 content
         $wp_customize->add_setting('special_feature_content_3', array(
            'default'       => 'in Bike und Equipment bei Anmietung',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_feature_content_3', array(
            'label'         => __('Besonder-Service-3-Inhalt', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_feature_content_3',
            'type'          => 'textarea',
            'priority'      => 40
        ));
        // special feature 3 image
        $wp_customize->add_setting('special_feature_img_3', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/specialty-chair.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'special_feature_img_3_control',
            array(
                'label'         => __('Besonder-Service-3-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'special_feature_img_3',
                'priority'      => 41
            )
        ));
         // special feature 4 title
         $wp_customize->add_setting('special_feature_title_4', array(
            'default'       => 'CO2 neutrales',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_feature_title_4', array(
            'label'         => __('Besonder-Service-4-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_feature_title_4',
            'priority'      => 42
        ));
         //  special feature 4 content
         $wp_customize->add_setting('special_feature_content_4', array(
            'default'       => 'und somit emissionsfreies Reisen – so schont ihr die Umwelt',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_feature_content_4', array(
            'label'         => __('Besonder-Service-4-Inhalt', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_feature_content_4',
            'type'          => 'textarea',
            'priority'      => 43
        ));
        // special feature 4 image
        $wp_customize->add_setting('special_feature_img_4', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/specialty-leaf.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'special_feature_img_4_control',
            array(
                'label'         => __('Besonder-Service-4-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'special_feature_img_4',
                'priority'      => 44
            )
        ));
         // special feature 5 title
         $wp_customize->add_setting('special_feature_title_5', array(
            'default'       => 'Nachhaltigkeit und Transparenz',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_feature_title_5', array(
            'label'         => __('Besonder-Service-5-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_feature_title_5',
            'priority'      => 45
        ));
         //  special feature 5 content
         $wp_customize->add_setting('special_feature_content_5', array(
            'default'       => 'Alle unsere Partner verschreiben sich in höchstem Maße im Wirtschaftskreislauf',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('special_feature_content_5', array(
            'label'         => __('Besonder-Service-5-Inhalt', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'special_feature_content_5',
            'type'          => 'textarea',
            'priority'      => 46
        ));
        // special feature 5 image
        $wp_customize->add_setting('special_feature_img_5', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/specialty-cycle2.png',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'special_feature_img_5_control',
            array(
                'label'         => __('Besonder-Service-5-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'special_feature_img_5',
                'priority'      => 47
            )
        ));
        //-------------------------------- section special features END --------------------------------------
        //-------------------------------- section premium services START --------------------------------------
        
         // premium services title
         $wp_customize->add_setting('premium_services_title', array(
            'default'       =>  'Wie definieren wir Premium Service?',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('premium_services_title', array(
            'label'         => __('Section-Premium-Services-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'premium_services_title',
            'priority'      => 48
        ));
         // premium service 1 title
         $wp_customize->add_setting('premium_service_title_1', array(
            'default'       => 'Von der persönlichen Übergabe eures gebuchten Bikes+Equipment bis zur Rückgabe – hier trefft ihr die Gründer noch mit Putz&shy;lappen und Staubwedel',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('premium_service_title_1', array(
            'label'         => __('Premium-Service-1-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'premium_service_title_1',
            'type'          => 'textarea',
            'priority'      => 49
        ));
        // premium service 1 image
        $wp_customize->add_setting('premium_service_img_1', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/clean.svg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'premium_service_img_1_control',
            array(
                'label'         => __('Premium-Service-1-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'premium_service_img_1',
                'priority'      => 50
            )
        ));
        // premium service 2 title
        $wp_customize->add_setting('premium_service_title_2', array(
            'default'       => 'Wir sind Radreisende wie Ihr und für euch da, telefonisch oder per Mail',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('premium_service_title_2', array(
            'label'         => __('Premium-Service-2-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'premium_service_title_2',
            'type'          => 'textarea',
            'priority'      => 51
        ));
        // premium service 2 image
        $wp_customize->add_setting('premium_service_img_2', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/group.svg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'premium_service_img_2_control',
            array(
                'label'         => __('Premium-Service-2-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'premium_service_img_2',
                'priority'      => 52
            )
        ));
         // premium service 3 title
         $wp_customize->add_setting('premium_service_title_3', array(
            'default'       => 'Nach voriger Termin&shy;vereinbarung könnt Ihr uns im MotionLab besuchen kommen und euch ein Bild von unserem Angebot machen. Wir haben Gesichter und die zeigen wir gern. Persönlicher Kontakt ist uns wichtig',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control('premium_service_title_3', array(
            'label'         => __('Premium-Service-3-Titel', 'cargobiketheme'),
            'section'       => 'front_page_section',
            'settings'      => 'premium_service_title_3',
            'type'          => 'textarea',
            'priority'      => 53
        ));
        // premium service 3 image
        $wp_customize->add_setting('premium_service_img_3', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/door.svg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'premium_service_img_3_control',
            array(
                'label'         => __('Premium-Service-3-Bild', 'cargobiketheme'),
                'section'       => 'front_page_section',
                'settings'      => 'premium_service_img_3',
                'priority'      => 54
            )
        ));
         //-------------------------------- section premium services END --------------------------------------


        /* ------------------------- Gut zu Wissen page -------------------- */
        // $wp_customize->add_section('gut_zu_wissen_page_section', array(
        //     'title'         => __('Gut-Zu-Wissen-Seite', 'cargobiketheme'),
        //     'panel'         => 'pages_panel',
        //     'priority'      => 5
        // ));
        // // gzw title
        // $wp_customize->add_setting('gzw_title', array(
        //     'default'       => 'Gut zu wissen',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_title', array(
        //     'label'         => __('GZW-Titel', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_title',
        //     'priority'      => 0
        // ));
        //  //  gzw subtitle
        //  $wp_customize->add_setting('gzw_subtitle', array(
        //     'default'       => 'Auf einer Radreise hat man die einzigartige Gelegenheit wunderbar zu entschleunigen, dem hektischen Alltag der Großstadt zu entkommen und die Seele auf dem Bike baumeln zu lassen. Zwischen den Etappen Stopps warten wunderschöne Landschaften und zahlreiche Geschichten auf euch. Um diese genießen zu können, ist eine gewisse Vorbereitung auf die Reise unausweichlich und verschönert euch den Urlaub.
        //     <br>
        //     <br>
        //      Wir haben uns Gedanken darüber gemacht und euch nochmal verbildlicht was wir euch bieten, was ihr vergessen könntet und welche Dinge aus unserer Sicht nicht fehlen sollten.
        //      <br>
        //     <br>
        //      Bei Fragen und Anregungen schreibt uns gern an <a href="mailto:urlaub@cargobike-adventures.de"><span style="color:blue">urlaub@cargobike-adventures.de</span></a> und wir kommen auf euch zurück',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_subtitle', array(
        //     'label'         => __('GZW-Subtitel', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_subtitle',
        //     'type'          => 'textarea',
        //     'priority'      => 1
        // ));
        // // gzw sec 1 title
        // $wp_customize->add_setting('gzw_sec1_title', array(
        //     'default'       => 'Rund ums Bike',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec1_title', array(
        //     'label'         => __('GZW-1-Titel', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec1_title',
        //     'priority'      => 2
        // ));
        //  //  gzw sec 1 content
        //  $wp_customize->add_setting('gzw_sec1_content', array(
        //     'default'       => 'Wir statten die Bikes außerdem mit einigen Annehmlichkeiten für eure Reise aus. Zur Grundausstattung gehören neben StVZO-konformer Beleuchtung auch ein Rückspiegel, ein fest installiertes, sowie ein extra ABUS Fahrradschloss und je Vermietung eine Luftpumpe dazu.
        //     <br>
        //     <br>
        //             Die Reichweite deiner Akkus variiert je nach Stärke der Unterstützung. Die maximale Reichweite beim schwächsten Modus „Eco“ beträgt ca. 200km. Danach rollt das Lastenrad natürlich weiter, ihr müsst dann aber ohne motorische Unterstützung auskommen.
        //             <br>
        //     <br>
        //             Um die Akkus von nahezu 0% auf 100% aufzuladen benötigt ihr ca. 3 Std. Zeit. Ihr könnt die Akkus vom Bike entfernen und sie an einer Steckdose laden, oder aber auch das Bike direkt mit dem Strom verbinden – so werden beide Akkus nacheinander geladen und man spart sich das Geschleppe. Auch die stärksten Regengüsse können den Cargobikes und der Elektronik nichts anhaben, ein Tauchgang im Bach kann aber zu einem selbstverschuldetem Ausfall führen - wir raten dringend davon ab es zu versuchen.
        //             <br>
        //     <br>
        //             Solltet Ihr selbst keine besitzen, geben wir euch 2 Ortlieb Fahrradtaschen für den Gepäckträger mit. Diese bieten mit je 20 Litern Volumen einiges an zusätzlichem Stauraum, sind komplett wasserdicht und abnehmbar. Je nachdem ob und wenn ja, wie viele Kinder ihr mitnehmt, bleibt euch in der vorderen Box noch einiges an Stauraum zum Transport von privaten Gegenstände frei zur Verfügung.
        //             <br>
        //     <br>
        //             Solltet ihr Extrawünsche haben dann lasst es uns wissen. Am Ende des Tages ist fast nichts unmöglich.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec1_content', array(
        //     'label'         => __('GZW-1-Inhalt', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec1_content',
        //     'type'          => 'textarea',
        //     'priority'      => 3
        // ));
        // // gzw sec 2 title
        // $wp_customize->add_setting('gzw_sec2_title', array(
        //     'default'       => 'Urlaub mit Kindern',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec2_title', array(
        //     'label'         => __('GZW-2-Titel', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec2_title',
        //     'priority'      => 4
        // ));
        //  //  gzw sec 2 content
        //  $wp_customize->add_setting('gzw_sec2_content', array(
        //     'default'       => 'Urlaub mit Kindern im Cargobike, geht das überhaupt? Und wenn ja, wie viele!?
        //     <br>
        //     <br>
        //     Grundsätzlich sei gesagt, dass eine Radreise mit den Kleinen absolut möglich ist. Mit einem unserer Riese & Müller Load75 E-Cargobikes kann man bis zu 3 Kinder mitnehmen. Das kommt natürlich auch auf deren Größe und Aktivität an – Platz ist genügend vorhanden! Es lassen sich bis zu 3 Kindersitze plus Gurte verbauen. Aus eigener Erfahrung und derer befreundeter Eltern hat sich gezeigt, dass die Kids im Bike sogar, wie auch im Auto, entspannt schlafen können. Hierzu empfehlen wir die Mitnahme von Nackenhörnchen und, je nach Temperatur, auch von Decken für die Kleinen. Während ihr fahrt und in die Pedale tretet bewegen sich die Kinder schließlich kaum. Als 5 köpfige Familie, bestehend aus 2 Erwachsenen plus 3 Kindern, könnt ihr mit 2 Cargobikes losziehen. In einem Bike verstauen wir sämtliche Ausrüstung, im anderen werden die Kids transportiert - so steht dem Abenteuer nichts mehr im Weg.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec2_content', array(
        //     'label'         => __('GZW-2-Inhalt', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec2_content',
        //     'type'          => 'textarea',
        //     'priority'      => 5
        // ));
        // // gzw sec 3 title
        // $wp_customize->add_setting('gzw_sec3_title', array(
        //     'default'       => 'Urlaub mit Hund',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec3_title', array(
        //     'label'         => __('GZW-3-Titel', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec3_title',
        //     'priority'      => 6
        // ));
        //  //  gzw sec 3 content
        //  $wp_customize->add_setting('gzw_sec3_content', array(
        //     'default'       => 'Gar kein Problem, wir lieben Vierbeiner! Allerdings dürfen Hunde nicht mit in das Innenzelt. Im Vorzelt, den sogenannten Apsiden, können es sich eure Liebsten gemütlich machen. So niedlich die Pfoten eures Liebsten auch sind, sie beschädigen den Zeltboden und führen zu hohen Reparaturkosten. In der Transportbox selbst solltet ihr nur darauf achten, dass Ihr leicht zu beschädigende Dinge wie Transporthüllen etc. zum Beispiel mit einer reißfesten Decke schützt.
        //     <br>
        //     <br>
        //     Wir bitten wir euch, bei einer Buchung anzugeben, dass ihr eure Fellnase mit in den Urlaub nehmt. Im Anschluss an eure Reise werden das Zelt und Bike gründlich gereinigt, damit die nächsten Abenteurer auch eine schöne Zeit haben.
        //     <br>
        //     <br>
        //     Solltet Ihr Fragen rund um das Thema Radreisen mit Hund haben dann schreibt uns gerne an: <a href="mailto:urlaub@cargobike-adventures.de><span style="color:blue">urlaub@cargobike-adventures.de</span></a>',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec3_content', array(
        //     'label'         => __('GZW-3-Inhalt', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec3_content',
        //     'type'          => 'textarea',
        //     'priority'      => 7
        // ));
        // // gzw sec 4 title
        // $wp_customize->add_setting('gzw_sec4_title', array(
        //     'default'       => 'Routenplanung & Navigation',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec4_title', array(
        //     'label'         => __('GZW-4-Titel', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec4_title',
        //     'priority'      => 8
        // ));
        //  //  gzw sec 4 content
        //  $wp_customize->add_setting('gzw_sec4_content', array(
        //     'default'       => 'Wohin können wir? Wo gibt’s die schönsten Strecken? Wie weit kommen wir an einem Tag oder in einer Woche? Viele von Euch werden viele Fragen im Kopf haben – wir versuchen sie für Euch im Vorhinein zu beantworten. Ob ihr euch nämlich an bekannten Radwegen wie dem Berlin-Kopenhagen Radweg oder dem Havelradweg orientieren wollt, auf eigene Faust quer Feld ein tourt oder von uns individuell beraten werden wollt, der Weg ist das Ziel und die Genugtuung eines Aktivurlaubs gibt euch Recht.
        //     <br>
        //     <br>
        //     An unseren Bikes könnt ihr eure Handys mittels der entsprechenden Halterung befestigen und einen Routenplaner (z.B. Komoot) laufen lassen. So verpasst ihr keine Abzweigung und bleibt immer auf dem richtigen Pfad.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec4_content', array(
        //     'label'         => __('GZW-4-Inhalt', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec4_content',
        //     'type'          => 'textarea',
        //     'priority'      => 9
        // ));
        // // gzw sec 5 title
        // $wp_customize->add_setting('gzw_sec5_title', array(
        //     'default'       => 'Sicherheit & Versicherung',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec5_title', array(
        //     'label'         => __('GZW-5-Titel', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec5_title',
        //     'priority'      => 10
        // ));
        //  //  gzw sec 5 content
        //  $wp_customize->add_setting('gzw_sec5_content', array(
        //     'default'       => 'Was passiert im Falle eines Diebstahls oder wenn ich einen Unfall mit dem Rad baue? Da haben wir in Zusammenarbeit mit der ENRA Fahrradversicherung ein tolles Angebot für euch. In einer Standardbuchung seid ihr in jedem Falle gegen Diebstahl, Teilediebstahl und Vandalismus abgesichert. Soll es noch ein bisschen mehr sein und Ihr wünscht euch das Rundum-sorglos-Paket für euer Abenteuer? Dann bucht das Premium Paket. Neben der Diebstahlversicherung beinhaltet der Extra Service u.a. Eine 24/7 Hotline, wo ihr Unfall-, Pannen- und Sturzschäden melden könnt und euch am Ort des Geschehens geholfen wird. Der Pickup Service* im Premium Paket gilt europaweit und transportiert euch zum Start oder Tagesetappe oder zur nächstgelegenen Werkstatt.
        //     <br>
        //     <br>
        //     2 Schlösser – bitte in jedem Fall über Nacht beide verwenden und das Fahrrad an einen befestigten Gegenstand, möglichst in Zeltnähe, anschließen.
        //     <br>
        //     <br>
        //     <span style="font-size: 0.7em">* Ausführliche Informationen zum Umfang der Premium Versicherung findet ihr in den AGBs</span>',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec5_content', array(
        //     'label'         => __('GZW-5-Inhalt', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec5_content',
        //     'type'          => 'textarea',
        //     'priority'      => 11
        // ));
        // // gzw sec 6 title
        // $wp_customize->add_setting('gzw_sec6_title', array(
        //     'default'       => 'Rund ums Zelt',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec6_title', array(
        //     'label'         => __('GZW-6-Titel', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec6_title',
        //     'priority'      => 12
        // ));
        //  //  gzw sec 6 content
        //  $wp_customize->add_setting('gzw_sec6_content', array(
        //     'default'       => 'Viele denken bei Camping Urlaub an kleine Zelte, ungemütliche Sitzpositionen auf dem Boden und Rückenschmerzen von dünnen Matten. Wir von Cargobike Adventures schicken euch in einen komfortablen Aktivurlaub. Mit unseren E-Cargobikes könnt ihr eine große Menge an Camping Equipment mit in den Urlaub nehmen und müsst so auf keine Annehmlichkeiten in der schönsten Zeit des Jahres verzichten.
        //     <br>
        //     <br>
        //     Wir haben uns dazu entschlossen, keine klassischen Zelte mit Gestänge zu verleihen sondern hier voll auf Innovation, Robustheit und Langlebigkeit zu setzen. Wir geben euch ein extrem robustes, aufblasbares Zelt des in Hamburg sitzenden Herstellers Heimplanet inklusive Pumpe mit. Ihr schließt die Pumpe an das Ventil des Zeltbogens an, pumpt ca. eine Minute und das Zelt steht. Heringe sichern das Zelt vom Wegfliegen - schon habt ihr euer Eigenheim für die Nacht aufgebaut. Schaut euch um, es gibt viel zu entdecken und das Zelt ist ein echter Hingucker.
        //     <br>
        //     <br>
        //     Wir haben bereits ein sogenanntes Groundsheet, also einen extra Boden an das Zelt angebracht. So wird der Zeltboden vor übermäßiger Abnutzung geschützt und die Lebensdauer erhöht.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec6_content', array(
        //     'label'         => __('GZW-6-Inhalt', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec6_content',
        //     'type'          => 'textarea',
        //     'priority'      => 13
        // ));
        // // gzw sec 7 title
        // $wp_customize->add_setting('gzw_sec7_title', array(
        //     'default'       => 'Schlafsack',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec7_title', array(
        //     'label'         => __('GZW-7-Titel', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec7_title',
        //     'priority'      => 14
        // ));
        //  //  gzw sec 7 content
        //  $wp_customize->add_setting('gzw_sec7_content', array(
        //     'default'       => 'Bitte denkt daran, dass Schlafsäcke nicht Standard bei einer Buchung sind!
        //     <br>
        //     <br>
        //     Wir können keine Schlafsäcke als Leihartikel anbieten. Die ständige Reinigung würde die Modelle extrem schnell altern lassen und sich absolut mit unserer Idee von umweltbewusstem Handeln im Allgemeinen beißen. Hier sind wir dabei, mit Herstellern an Lösungen zu arbeiten um euch gute Konditionen für entsprechende Produkte anzubieten. Solltet ihr vorab eine Beratung zum Thema brauchen dann sagt uns Bescheid, wir helfen euch gerne und kompetent weiter. Bitte denkt also an Decken oder einen eigenen Schlafsack wenn ihr aufbrecht. Neben dem Schlafsack empfiehlt es sich, ein eigenes Kissen dabei zu haben. Da ihr weniger auf das Gewicht achten müsst, könnt ihr ruhig eure Kuschelkissen von zu Hause einpacken. Solltet ihr ohnehin mit dem Gedanken einer Neuanschaffung (z.B. auch für Wandertouren) spielen, informiert euch im Fachgeschäft was es für Modelle am Markt gibt und testet euch durch – nur so findet ihr euren Favoriten. Bei den Kollegen von Globetrotter in Steglitz z.B. kann man sich prima in verschiedene Modelle reinlegen um den geeigneten Schlafsack zu finden.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec7_content', array(
        //     'label'         => __('GZW-7-Inhalt', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec7_content',
        //     'type'          => 'textarea',
        //     'priority'      => 15
        // ));
        // // gzw sec 8 title
        // $wp_customize->add_setting('gzw_sec8_title', array(
        //     'default'       => 'Isomatten',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec8_title', array(
        //     'label'         => __('GZW-8-Titel', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec8_title',
        //     'priority'      => 16
        // ));
        //  //  gzw sec 8 content
        //  $wp_customize->add_setting('gzw_sec8_content', array(
        //     'default'       => 'Ähnlich wie bei den Schlafsäcken verhält es sich auch mit den Isomatten. Die Produkte sind sensibel in der Handhabung und definieren sich außerdem als hygienisch relevant. Wir wollen daher keine Isomatten als Leihartikel anbieten, haben aber auch hier eine Lösung für euch parat.
        //     <br>
        //     <br>
        //     Da wir neben Rad Enthusiasten auch Outdoor erfahren sind, haben wir euch vom Anbieter VAUDE Modelle rausgesucht, die wir euch zum Kauf anbieten wollen. Schaut dazu gerne mal im Frühjahr 2021 in unserem Shop vorbei.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('gzw_sec8_content', array(
        //     'label'         => __('GZW-8-Inhalt', 'cargobiketheme'),
        //     'section'       => 'gut_zu_wissen_page_section',
        //     'settings'      => 'gzw_sec8_content',
        //     'type'          => 'textarea',
        //     'priority'      => 17
        // ));
        // ------------------------- Gut zu wissen page END --------------------

         /* ------------------------- FAQ page START-------------------- */
        //  $wp_customize->add_section('faq_page_section', array(
        //     'title'         => __('FAQ-Seite', 'cargobiketheme'),
        //     'panel'         => 'pages_panel',
        //     'priority'      => 6
        // ));
        // // faq title
        // $wp_customize->add_setting('faq_title', array(
        //     'default'       => 'FAQ...',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_title', array(
        //     'label'         => __('faq-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_title',
        //     'priority'      => 0
        // ));
        //  //  faq subtitle
        //  $wp_customize->add_setting('faq_subtitle', array(
        //     'default'       => 'Wir haben hier für euch häufig aufkommende Fragen zusammen gefasst. Sollten weitere Unklarheiten bestehen oder ihr Lust auf eine Probefahrt haben,
        //     schreibt uns gern eine Mail an <a href="mailto:urlaub@cargobike-adventures.de"><span style="color:blue">urlaub@cargobike-adventures.de</span></a>. Wir sind für euch da.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_subtitle', array(
        //     'label'         => __('faq-Subtitel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_subtitle',
        //     'type'          => 'textarea',
        //     'priority'      => 1
        // ));
        // // faq sec 1 title
        // $wp_customize->add_setting('faq_sec1_title', array(
        //     'default'       => 'Warum kann man bei euch noch nicht buchen?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec1_title', array(
        //     'label'         => __('faq-1-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec1_title',
        //     'type'          => 'textarea',
        //     'priority'      => 2
        // ));
        //  //  faq sec 1 content
        //  $wp_customize->add_setting('faq_sec1_content', array(
        //     'default'       => 'Aufgrund der aktuell schwer vorhersehbaren Situation gehen wir davon aus, dass eure Urlaubsplanung auch in das Frühjahr 2021 geschoben wird.
        //     Um uns und euch unnötige Strapazen von Stornierungen oder Umbuchungen zu ersparen, haben wir unsere Gutschein Aktion ins Leben gerufen.
        //      So habt ihr die Vorfreude auf einen schönen Urlaub im nächsten Jahr und könnt, wenn sich die Lage entspannt, euer Wunschdatum mit uns buchen.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec1_content', array(
        //     'label'         => __('faq-1-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec1_content',
        //     'type'          => 'textarea',
        //     'priority'      => 3
        // ));
        // // faq sec 2 title
        // $wp_customize->add_setting('faq_sec2_title', array(
        //     'default'       => 'Wie funktioniert das mit den Gutscheinen?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec2_title', array(
        //     'label'         => __('faq-2-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec2_title',
        //     'type'          => 'textarea',
        //     'priority'      => 4
        // ));
        //  //  faq sec 2 content
        //  $wp_customize->add_setting('faq_sec2_content', array(
        //     'default'       => 'Der Kauf ist kinderleicht. Ihr sucht euch einen Gutschein Betrag aus, könnt einen Empfänger und gerne auch eine persönliche Nachricht hinterlassen
        //     und erhaltet im Anschluss eine Mail mit der Buchungsbestätigung. Mit dieser Mail könnt ihr im Frühjahr 2021 dann euer Abenteuer buchen und starten.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec2_content', array(
        //     'label'         => __('faq-2-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec2_content',
        //     'type'          => 'textarea',
        //     'priority'      => 5
        // ));
        // // faq sec 3 title
        // $wp_customize->add_setting('faq_sec3_title', array(
        //     'default'       => 'Sind eure Lastenräder E-Cargobikes?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec3_title', array(
        //     'label'         => __('faq-3-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec3_title',
        //     'type'          => 'textarea',
        //     'priority'      => 6
        // ));
        //  //  faq sec 3 content
        //  $wp_customize->add_setting('faq_sec3_content', array(
        //     'default'       => 'Ja, alle von uns verliehenen Urlaubsmobile sind Lastenräder mit Elektroantrieb.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec3_content', array(
        //     'label'         => __('faq-3-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec3_content',
        //     'type'          => 'textarea',
        //     'priority'      => 7
        // ));
        // // faq sec 4 title
        // $wp_customize->add_setting('faq_sec4_title', array(
        //     'default'       => 'Benötigt man dafür einen Führerschein?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec4_title', array(
        //     'label'         => __('faq-4-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec4_title',
        //     'type'          => 'textarea',
        //     'priority'      => 8
        // ));
        //  //  faq sec 4 content
        //  $wp_customize->add_setting('faq_sec4_content', array(
        //     'default'       => 'Für das Fahren wird kein Führerschein benötigt. Es handelt sich um Pedelecs, die bis ca. 25 km/h unterstützen und rechtlich als Fahrräder gelten.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec4_content', array(
        //     'label'         => __('faq-4-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec4_content',
        //     'type'          => 'textarea',
        //     'priority'      => 9
        // ));
        // // faq sec 5 title
        // $wp_customize->add_setting('faq_sec5_title', array(
        //     'default'       => 'Ich fahre sonst nur ein normales Fahrrad, wie besonders fahren sich eure Bikes?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec5_title', array(
        //     'label'         => __('faq-5-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec5_title',
        //     'type'          => 'textarea',
        //     'priority'      => 10
        // ));
        //  //  faq sec 5 content
        //  $wp_customize->add_setting('faq_sec5_content', array(
        //     'default'       => 'Nach kurzer Eingewöhnung fahren sich die Bikes wie selbstverständlich (aber mit Vollfederung und Rückenwind). Gerade das Anfahren ist durch den Motor ein Kinderspiel,
        //     das Gewicht fällt kaum auf. Ganz im Gegenteil, man ist meist der schnellste an der Ampel. Sobald man den Stadtverkehr hinter sich gelassen hat, 
        //     cruist man entspannt und lässig über den Asphalt. Stock und Stein stehen euch aber auch nicht im Weg - die Vollfederung polstert euch geschmeidig durchs Land. 
        //     Breite Reifen, hydraulische Scheibenbremsen und super Beleuchtung machen die Fahrt zu einem echten Vergnügen.<br>
        //     <br>
        //     Vor der Anmietung seid ihr herzlich zu einer Probefahrt auf dem großen, verkehrsfreien Gelände eingeladen.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec5_content', array(
        //     'label'         => __('faq-5-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec5_content',
        //     'type'          => 'textarea',
        //     'priority'      => 11
        // ));
        // // faq sec 6 title
        // $wp_customize->add_setting('faq_sec6_title', array(
        //     'default'       => 'Was kann man mitnehmen?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec6_title', array(
        //     'label'         => __('faq-6-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec6_title',
        //     'type'          => 'textarea',
        //     'priority'      => 12
        // ));
        //  //  faq sec 6 content
        //  $wp_customize->add_setting('faq_sec6_content', array(
        //     'default'       => 'Die Bikes haben eine große Ladefläche und ein zulässiges Gesamtgewicht von 200kg.<br>
        //     <br>
        //     Es geht also eine ganze Menge mit!',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec6_content', array(
        //     'label'         => __('faq-6-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec6_content',
        //     'type'          => 'textarea',
        //     'priority'      => 13
        // ));
        // // faq sec 7 title
        // $wp_customize->add_setting('faq_sec7_title', array(
        //     'default'       => 'Darf man Kinder auf dem Lastenrad mitnehmen?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec7_title', array(
        //     'label'         => __('faq-7-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec7_title',
        //     'type'          => 'textarea',
        //     'priority'      => 14
        // ));
        //  //  faq sec 7 content
        //  $wp_customize->add_setting('faq_sec7_content', array(
        //     'default'       => 'Bei einem Lastenrad gibt es keine Altersbegrenzung für die Kinder. Nur hier dürfen auch Kinder über sieben Jahre mitfahren. 
        //     Je nach Bedarf und Konfiguration können bis zu 3 kleine Menschen mit an Bord kommen. Wir bieten entsprechende Kindersitze + Gurte an - bei Fragen sind wir für euch da.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec7_content', array(
        //     'label'         => __('faq-7-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec7_content',
        //     'type'          => 'textarea',
        //     'priority'      => 15
        // ));
        // // faq sec 8 title
        // $wp_customize->add_setting('faq_sec8_title', array(
        //     'default'       => 'Muss man Helme tragen und wenn ja, verleiht ihr welche?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec8_title', array(
        //     'label'         => __('faq-8-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec8_title',
        //     'type'          => 'textarea',
        //     'priority'      => 16
        // ));
        //  //  faq sec 8 content
        //  $wp_customize->add_setting('faq_sec8_content', array(
        //     'default'       => 'Da wir in Deutschland keiner Helmpflicht unterliegen müsst ihr auch auf unseren Bikes keine tragen. Wir legen euch als Vielfahrer dennoch ans Herz, 
        //     nicht auf den Schutz eines Sturzhelmes zu verzichten.<br>
        //     <br>
        //     Aus hygienischen Gründen verleihen wir allerdings keine Helme, können euch aber zu günstigen Konditionen aushelfen. Falls ihr noch keine besitzt sind wir sicher,
        //      dass diese nach einer ersten Tour in Zukunft regelmäßig zum Einsatz kommen. Ein Fahrradhelm ist definitiv die Investition wert - der nächste Fahrradurlaub kommt bestimmt.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec8_content', array(
        //     'label'         => __('faq-8-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec8_content',
        //     'type'          => 'textarea',
        //     'priority'      => 17
        // ));
        // // faq sec 9 title
        // $wp_customize->add_setting('faq_sec9_title', array(
        //     'default'       => 'Was verleiht ihr an Campingzubehör?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec9_title', array(
        //     'label'         => __('faq-9-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec9_title',
        //     'type'          => 'textarea',
        //     'priority'      => 18
        // ));
        //  //  faq sec 9 content
        //  $wp_customize->add_setting('faq_sec9_content', array(
        //     'default'       => 'Das kommt ganz darauf an was ihr vor habt! Wir haben hochwertige Zelte, Camping-Möbel und weiteres Equipment wie Tarps, Hängematten, Campingkocher usw. zum Verleih bereit.
        //     Natürlich wird alles vor dem Verleih eingehend desinfiziert!<br>
        //    <br>
        //    Wir verzichten aus hygienischen Gründen auf den Verleih von Schlafsäcken.<br>
        //    <br>
        //    Wir arbeiten aktuell daran, euch auf Anfrage entsprechende Modelle anbieten zu können.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec9_content', array(
        //     'label'         => __('faq-9-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec9_content',
        //     'type'          => 'textarea',
        //     'priority'      => 19
        // ));
        // // faq sec 10 title
        // $wp_customize->add_setting('faq_sec10_title', array(
        //     'default'       => 'Welche Strecken können mit den Bikes zurückgelegt werden?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec10_title', array(
        //     'label'         => __('faq-10-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec10_title',
        //     'type'          => 'textarea',
        //     'priority'      => 20
        // ));
        //  //  faq sec 10 content
        //  $wp_customize->add_setting('faq_sec10_content', array(
        //     'default'       => 'Die Reichweite der Akkus liegt bei über 200km. Es hängt also ganz an eurer Lust und Laune wie weit das nächste Ziel entfernt liegt.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec10_content', array(
        //     'label'         => __('faq-10-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec10_content',
        //     'type'          => 'textarea',
        //     'priority'      => 21
        // ));
        // // faq sec 11 title
        // $wp_customize->add_setting('faq_sec11_title', array(
        //     'default'       => 'Wie lädt man die Akkus während einer Tour wieder auf?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec11_title', array(
        //     'label'         => __('faq-11-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec11_title',
        //     'type'          => 'textarea',
        //     'priority'      => 22
        // ));
        //  //  faq sec 11 content
        //  $wp_customize->add_setting('faq_sec11_content', array(
        //     'default'       => 'Wir geben euch zur Leihe die passenden Ladegeräte mit. Ihr könnt die Bikes auf nahezu jedem Campingplatz und jeder Steckdose mit
        //     dem Netz verbinden und entsprechend aufladen. Eine kleine Einführung gibt es bei Abholung.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec11_content', array(
        //     'label'         => __('faq-11-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec11_content',
        //     'type'          => 'textarea',
        //     'priority'      => 23
        // ));
        // // faq sec 12 title
        // $wp_customize->add_setting('faq_sec12_title', array(
        //     'default'       => 'Wo können wir starten?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec12_title', array(
        //     'label'         => __('faq-12-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec12_title',
        //     'type'          => 'textarea',
        //     'priority'      => 24
        // ));
        //  //  faq sec 12 content
        //  $wp_customize->add_setting('faq_sec12_content', array(
        //     'default'       => 'Unser Standort befindet sich in der Bouchéstr.12 | Halle 20, 12435 Berlin.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec12_content', array(
        //     'label'         => __('faq-12-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec12_content',
        //     'type'          => 'textarea',
        //     'priority'      => 25
        // ));
        // // faq sec 13 title
        // $wp_customize->add_setting('faq_sec13_title', array(
        //     'default'       => 'Sind die Bikes versichert?',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec13_title', array(
        //     'label'         => __('faq-13-Titel', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec13_title',
        //     'type'          => 'textarea',
        //     'priority'      => 26
        // ));
        //  //  faq sec 13 content
        //  $wp_customize->add_setting('faq_sec13_content', array(
        //     'default'       => 'Ja, die Bikes sind gegen Diebstahl, Teilediebstahl und Vandalismus versichert. Wenn ihr einen erweiterten Versicherungsschutz wünscht,
        //     dann bucht ihr die Premium Option dazu. Bei der ENRA Fahrradversicherung seid ihr dann zusätzlich noch gegen Unfall-, Pannen- und Sturzschäden abgesichert
        //      Außerdem enthält der Rundumschutz den europaweiten Pick-Up-Service. Er bietet die Pannenhilfe für unterwegs. Solltest Du eine Tour nicht fortsetzen können, 
        //      weil z.B. der Motor ausfällt, dann rufst Du einfach die Pick-Up-Service Hotline an. Diese organisiert den Rücktransport zum Ausgangspunkt Deiner Tour. Die Kontaktdaten 
        //      findest Du auf Deiner Pick-Up-Card.',
        //     'type'          => 'theme_mod'
        // ));
        // $wp_customize->add_control('faq_sec13_content', array(
        //     'label'         => __('faq-13-Inhalt', 'cargobiketheme'),
        //     'section'       => 'faq_page_section',
        //     'settings'      => 'faq_sec13_content',
        //     'type'          => 'textarea',
        //     'priority'      => 27
        // ));
        // ------------------------- FAQ page END --------------------

        /* ------------------------- Contact page -------------------------- */
        $wp_customize->add_section('contact_page_section', array(
            'title'         => __('Kontakt-Seite', 'cargobiketheme'),
            'panel'         => 'pages_panel',
            'priority'      => 3
        ));
        // Contact page layout
        $wp_customize->add_setting('contact_page_layout', array(
            'default'       => 'detail_left',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'contact_page_layout_control',
            array(
                'label'         => __('Layout', 'cargobiketheme'),
                'section'       => 'contact_page_section',
                'settings'      => 'contact_page_layout',
                'type'          => 'select',
                'choices'       => array(
                    'detail_left'   => __('Details links'),
                    'detail_right'  => __('Details rechts')
                ),
                'priority'      => 0
            )
        ));
        // Contact page content position
        $wp_customize->add_setting('contact_page_content_pos', array(
            'default'       => 'after',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'contact_page_content_pos_control',
            array(
                'label'         => __('Position des Seiteninhalts', 'cargobiketheme'),
                'section'       => 'contact_page_section',
                'settings'      => 'contact_page_content_pos',
                'type'          => 'select',
                'choices'       => array(
                    'before'   => __('Vor der Kontaktdetails'),
                    'after'  => __('Nach der Kontaktdetails'),
                ),
                'priority'      => 1
            )
        ));
        // Contact page enable map
        $wp_customize->add_setting('contact_page_enable_map', array(
            'default'       => false,
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'contact_page_enable_map_control',
            array(
                'label'         => __('Google Map anzeigen?', 'cargobiketheme'),
                'section'       => 'contact_page_section',
                'settings'      => 'contact_page_enable_map',
                'type'          => 'checkbox',
                'priority'      => 2
            )
        ));
        // Contact page photo
        $wp_customize->add_setting('contact_page_photo', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/contact-ppl2.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'contact_page_photo_control',
            array(
                'label'         => __('Bild', 'cargobiketheme'),
                'section'       => 'contact_page_section',
                'settings'      => 'contact_page_photo',
                'priority'      => 3
            )
        ));

        /* ------------------------- Imprint page -------------------------- */
        $wp_customize->add_section('imprint_page_section', array(
            'title'         => __('Impressum-Seite', 'cargobiketheme'),
            'panel'         => 'pages_panel',
            'priority'      => 4
        ));
        // Slider photo 1
        $wp_customize->add_setting('imprint_page_photo1', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/square-1.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'imprint_page_photo1_control',
            array(
                'label'         => __('Bild 1', 'cargobiketheme'),
                'section'       => 'imprint_page_section',
                'settings'      => 'imprint_page_photo1',
                'priority'      => 0
            )
        ));
        // Slider photo 2
        $wp_customize->add_setting('imprint_page_photo2', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/square-2.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'imprint_page_photo2_control',
            array(
                'label'         => __('Bild 2', 'cargobiketheme'),
                'section'       => 'imprint_page_section',
                'settings'      => 'imprint_page_photo2',
                'priority'      => 1
            )
        ));
        // Slider photo 3
        $wp_customize->add_setting('imprint_page_photo3', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/square-3.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'imprint_page_photo3_control',
            array(
                'label'         => __('Bild 3', 'cargobiketheme'),
                'section'       => 'imprint_page_section',
                'settings'      => 'imprint_page_photo3',
                'priority'      => 2
            )
        ));
        // Slider photo 4
        $wp_customize->add_setting('imprint_page_photo4', array(
            'default'       => get_bloginfo('stylesheet_directory').'/assets/img/square-4.jpg',
            'type'          => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'imprint_page_photo4_control',
            array(
                'label'         => __('Bild 4', 'cargobiketheme'),
                'section'       => 'imprint_page_section',
                'settings'      => 'imprint_page_photo4',
                'priority'      => 3
            )
        ));
    }
    add_action('customize_register', 'cbt_customize_register');

    // Function to sanitize url
    function sanitize_the_url($url) {
        esc_url($url);
    }

    // Function to sanitize email
    function sanitize_email_address($email, $setting) {
        return (is_email($email) ? $email : $setting->default);
    }
?>