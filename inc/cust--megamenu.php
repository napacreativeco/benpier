<?php

add_action( 'customize_register', 'bp_customizer_settings' );

function bp_customizer_settings( $wp_customize ) {

  $wp_customize->add_panel('mega_menu_panel', array(
    'title'        =>'Mega Menu',
    'description'  => 'Editing the Mega Menu',
    'priority'     => 10,
  ));

    /*===========================================================================
    Zero: Initial Background
    =========================================================================== */
  // Section
  $wp_customize->add_section( 'mm_zero__section' , array(
    'title'      => __( 'Initial Background', 'bp' ),
    'priority'   => 1,
    'panel'      => 'mega_menu_panel'
  ) );

  // Image - Setting
  $wp_customize->add_setting( 'mm_zero__image', array(
    'capability' => 'edit_theme_options',
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Image - Control
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mm_zero__image_control', array(
            'label'      => __( 'Initial Background image', 'theme_name' ),
            'section'    => 'mm_zero__section',
            'settings'   => 'mm_zero__image',
  ) ) );


  /*===========================================================================
    One: Commissions
    =========================================================================== */

  // Section
  $wp_customize->add_section( 'mm_one__section' , array(
    'title'      => __( '1: Top Left', 'bp' ),
    'priority'   => 10,
    'panel'      => 'mega_menu_panel'
  ) );

  // Text - Setting
  $wp_customize->add_setting( 'mm_one__text', array(
      'capability' => 'edit_theme_options',
      'default' => 'Commissions',
      'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Text - Control
  $wp_customize->add_control( 'mm_one__title_control', array(
      'type' => 'text',
      'settings' => 'mm_one__text',
      'section' => 'mm_one__section', // Add a default or your own section
      'label' => __( 'Link Title', 'bp' ),
      'description' => __( 'The title for your link', 'bp' ),
  ) );

  // Image - Setting
  $wp_customize->add_setting( 'mm_one__image', array(
    'capability' => 'edit_theme_options',
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Image - Control
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mm_one__image_control', array(
            'label'      => __( 'Background image', 'theme_name' ),
            'section'    => 'mm_one__section',
            'settings'   => 'mm_one__image',
  ) ) );

  // Page - Setting
  $wp_customize->add_setting( 'mm_one__collection', array(
    'capability' => 'edit_theme_options',
    'default' => 'Commissions',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  // Page - Control
  $wp_customize->add_control( 'mm_one__collection_control', array(
      'label' => 'Select Collection',
      'type'  => 'select',
      'section' => 'mm_one__section',
      'settings' => 'mm_one__collection',
      'choices' => array(
        'commissions' => __( 'Commissions', 'bp' ),
        'personal' => __( 'Personal', 'bp' ),
        'film' => __('Films', 'bp'),
        'books' => __('Books', 'bp'),
        'prints' => __('Prints', 'bp'),
        'merch' => __('Merch', 'bp')
      ),
  ));
  

  /*===========================================================================
    Two: Projects
    =========================================================================== */
  // Section
  $wp_customize->add_section( 'mm_two__section' , array(
    'title'      => __( '2: Top Center', 'bp' ),
    'priority'   => 20,
    'panel'      => 'mega_menu_panel'
  ) );
  // Text - Setting
  $wp_customize->add_setting( 'mm_two__text', array(
      'capability' => 'edit_theme_options',
      'default' => 'Personal Projects',
      'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Text - Control      
  $wp_customize->add_control( 'mm_two__text_control', array(
      'type' => 'text',
      'settings' => 'mm_two__text',
      'section' => 'mm_two__section', // Add a default or your own section
      'label' => __( 'Link Title', 'bp' ),
      'description' => __( 'This is a custom text box.', 'bp' ),
  ) );

  // Image - Setting
  $wp_customize->add_setting( 'mm_two__image', array(
    'capability' => 'edit_theme_options',
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Image - Control
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mm_two__image_control', array(
            'label'      => __( 'Background image', 'theme_name' ),
            'section'    => 'mm_two__section',
            'settings'   => 'mm_two__image',
  ) ) );

  // Page - Setting
  $wp_customize->add_setting( 'mm_two__collection', array(
    'capability' => 'edit_theme_options',
    'default' => 'personal',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  // Page - Control
  $wp_customize->add_control( 'mm_two__collection_control', array(
      'label' => 'Select Collection',
      'type'  => 'select',
      'section' => 'mm_two__section',
      'settings' => 'mm_two__collection',
      'choices' => array(
        'commissions' => __( 'Commissions', 'bp' ),
        'personal' => __( 'Personal', 'bp' ),
        'film' => __('Films', 'bp'),
        'books' => __('Books', 'bp'),
        'prints' => __('Prints', 'bp'),
        'merch' => __('Merch', 'bp')
      ),
  ));
  



  /*===========================================================================
    Three: Films
    =========================================================================== */
  // Section
  $wp_customize->add_section( 'mm_three__section' , array(
    'title'      => __( '3: Top Right', 'bp' ),
    'priority'   => 30,
    'panel'      => 'mega_menu_panel'
  ) );
  // Text - Setting
  $wp_customize->add_setting( 'mm_three__text', array(
      'capability' => 'edit_theme_options',
      'default' => 'Films',
      'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Text - Control      
  $wp_customize->add_control( 'mm_three__text_control', array(
      'type' => 'text',
      'settings' => 'mm_three__text',
      'section' => 'mm_three__section', // Add a default or your own section
      'label' => __( 'Link Title', 'bp' ),
      'description' => __( 'This is a custom text box.', 'bp' ),
  ) );

  // Image - Setting
  $wp_customize->add_setting( 'mm_three__image', array(
    'capability' => 'edit_theme_options',
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Image - Control
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mm_three__image_control', array(
            'label'      => __( 'Background image', 'bp' ),
            'section'    => 'mm_three__section',
            'settings'   => 'mm_three__image',
  ) ) );

  // Page - Setting
  $wp_customize->add_setting( 'mm_three__collection', array(
    'capability' => 'edit_theme_options',
    'default' => 'film',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  // Page - Control
  $wp_customize->add_control( 'mm_three__collection_control', array(
      'label' => 'Select Collection',
      'type'  => 'select',
      'section' => 'mm_three__section',
      'settings' => 'mm_three__collection',
      'choices' => array(
        'commissions' => __( 'Commissions', 'bp' ),
        'personal' => __( 'Personal', 'bp' ),
        'film' => __('Films', 'bp'),
        'books' => __('Books', 'bp'),
        'prints' => __('Prints', 'bp'),
        'merch' => __('Merch', 'bp')
      ),
  ));
  


  /*===========================================================================
    Four: Books
    =========================================================================== */
  // Section
  $wp_customize->add_section( 'mm_four__section' , array(
    'title'      => __( '4: Bottom Left', 'bp' ),
    'priority'   => 40,
    'panel'      => 'mega_menu_panel'
  ) );
  // Text - Setting
  $wp_customize->add_setting( 'mm_four__text', array(
      'capability' => 'edit_theme_options',
      'default' => 'Books',
      'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Text - Control      
  $wp_customize->add_control( 'mm_four__text_control', array(
      'type' => 'text',
      'settings' => 'mm_four__text',
      'section' => 'mm_four__section', // Add a default or your own section
      'label' => __( 'Link Title', 'bp' ),
      'description' => __( 'This is a custom text box.', 'bp' ),
  ) );

  // Image - Setting
  $wp_customize->add_setting( 'mm_four__image', array(
    'capability' => 'edit_theme_options',
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Image - Control
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mm_four__image_control', array(
            'label'      => __( 'Background image', 'bp' ),
            'section'    => 'mm_four__section',
            'settings'   => 'mm_four__image',
  ) ) );

  // Page - Setting
  $wp_customize->add_setting( 'mm_four__collection', array(
    'capability' => 'edit_theme_options',
    'default' => 'books',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  // Page - Control
  $wp_customize->add_control( 'mm_four__collection_control', array(
      'label' => 'Select Collection',
      'type'  => 'select',
      'section' => 'mm_four__section',
      'settings' => 'mm_four__collection',
      'choices' => array(
        'commissions' => __( 'Commissions', 'bp' ),
        'personal' => __( 'Personal', 'bp' ),
        'film' => __('Films', 'bp'),
        'books' => __('Books', 'bp'),
        'prints' => __('Prints', 'bp'),
        'merch' => __('Merch', 'bp')
      ),
  ));
    


  /*===========================================================================
    Five: Prints
    =========================================================================== */
  // Section
  $wp_customize->add_section( 'mm_five__section' , array(
    'title'      => __( '5: Bottom Center', 'bp' ),
    'priority'   => 50,
    'panel'      => 'mega_menu_panel'
  ) );
  // Text - Setting
  $wp_customize->add_setting( 'mm_five__text', array(
      'capability' => 'edit_theme_options',
      'default' => 'Prints',
      'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Text - Control      
  $wp_customize->add_control( 'mm_five__text_control', array(
      'type' => 'text',
      'settings' => 'mm_five__text',
      'section' => 'mm_five__section', // Add a default or your own section
      'label' => __( 'Link Title', 'bp' ),
      'description' => __( 'This is a custom text box.', 'bp' ),
  ) );

  // Image - Setting
  $wp_customize->add_setting( 'mm_five__image', array(
    'capability' => 'edit_theme_options',
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Image - Control
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mm_five__image_control', array(
            'label'      => __( 'Background image', 'bp' ),
            'section'    => 'mm_five__section',
            'settings'   => 'mm_five__image',
  ) ) );

  // Page - Setting
  $wp_customize->add_setting( 'mm_five__collection', array(
    'capability' => 'edit_theme_options',
    'default' => 'prints',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  // Page - Control
  $wp_customize->add_control( 'mm_five__collection_control', array(
      'label' => 'Select Collection',
      'type'  => 'select',
      'section' => 'mm_five__section',
      'settings' => 'mm_five__collection',
      'choices' => array(
        'commissions' => __( 'Commissions', 'bp' ),
        'personal' => __( 'Personal', 'bp' ),
        'film' => __('Films', 'bp'),
        'books' => __('Books', 'bp'),
        'prints' => __('Prints', 'bp'),
        'merch' => __('Merch', 'bp')
      ),
  ));
  

  /*===========================================================================
    Six: Merch
    =========================================================================== */
  // Section
  $wp_customize->add_section( 'mm_six__section' , array(
    'title'      => __( '6: Bottom Right', 'bp' ),
    'priority'   => 60,
    'panel'      => 'mega_menu_panel'
  ) );
  // Text - Setting
  $wp_customize->add_setting( 'mm_six__text', array(
      'capability' => 'edit_theme_options',
      'default' => 'Merch',
      'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Text - Control      
  $wp_customize->add_control( 'mm_six__text_control', array(
      'type' => 'text',
      'settings' => 'mm_six__text',
      'section' => 'mm_six__section', // Add a default or your own section
      'label' => __( 'Link Title', 'bp' ),
      'description' => __( 'This is a custom text box.', 'bp' ),
  ) );

  // Image - Setting
  $wp_customize->add_setting( 'mm_six__image', array(
    'capability' => 'edit_theme_options',
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Image - Control
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mm_six__image_control', array(
            'label'      => __( 'Background image', 'bp' ),
            'section'    => 'mm_six__section',
            'settings'   => 'mm_six__image',
  ) ) );


}


