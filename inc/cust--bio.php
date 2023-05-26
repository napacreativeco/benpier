<?php

add_action( 'customize_register', 'bio_customizer_settings' );

function bio_customizer_settings( $wp_customize ) {


  /*===========================================================================
    Bio
    =========================================================================== */

  // Section
  $wp_customize->add_section( 'bio__section' , array(
    'title'      => __( 'Bio', 'bp' ),
    'priority'   => 10,
  ) );

  // Title - Setting
  $wp_customize->add_setting( 'bio__title', array(
      'capability' => 'edit_theme_options',
      'default' => 'Ben Pier is an American Photographer & Director based in Los Angeles.',
      'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Title - Control
  $wp_customize->add_control( 'bio__title_control', array(
      'type' => 'text',
      'settings' => 'bio__title',
      'section' => 'bio__section', // Add a default or your own section
      'label' => __( 'Bio Title', 'bp' ),
      'description' => __( 'The title for your Bio section on the homepage', 'bp' ),
  ) );

  // Body - Setting
  $wp_customize->add_setting( 'bio__body', array(
      'capability' => 'edit_theme_options',
      'default' => 'Raised in St. Louis, Ben grew up on a steady diet of drawing, skateboarding, and playing in punk bands before attending art school in Chicago. 
      After graduating, he spent a decade in NYC applying his traditional documentary-style photography to the realms of fashion and music. 
      Ben is known for capturing real moments with real people with a vibrant, cinematic spirit that doesn’t feel staged. 
      His immersive approach relies on casting subjects and locations that allow him to create lifestyle work in a raw and honest way. 
      He captures authentic moments with diverse, interesting talent, and his use of natural light and brilliant colors adds a youthful energy that has become Ben’s signature. 
      Additionally, his body of work includes four published monographs, the latest entitled “Nothing You Don’t Know” was published and distributed by Maison Kitsuné in 2021.',
      'sanitize_callback' => 'sanitize_text_field',
  ) );
  // Body - Control
  $wp_customize->add_control( 'bio__body_control', array(
      'type' => 'textarea',
      'settings' => 'bio__body',
      'section' => 'bio__section', // Add a default or your own section
      'label' => __( 'Bio text', 'bp' ),
      'description' => __( 'This is the body of your Bio', 'bp' ),
  ) );



}


