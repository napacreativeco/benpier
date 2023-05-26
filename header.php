<?php
wp_head();

$term = get_queried_object();
?>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php 
    if ( is_front_page() ) { 
    ?>
        <title>Ben Pier</title>
    <?php
    } else {
    ?>
        <title><?php echo $term->description ?> | Ben Pier</title>
    <?php
    } ?>
    
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400&display=swap" rel="stylesheet">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
  </head>

  <body data-scroll-container>

    <!--
    =========================================
    NAVBAR
    =========================================
    -->
    <div id="top" class="navbar">
        <div class="row">
            <div class="logo haetten">
                <span class="b">B.</span>
                <span class="home-btn"><a href="/" title="Home">Home</a></span>
            </div>
            <div class="hamburger-wrapper">
                <div class="hamburger haetten">
                    Menu
                </div>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/mega-menu'); ?>
    
    <!--
    =========================================
    Loading Screen
    =========================================
    -->
    <div class="loading-screen">
        <div class="wrapper">

            <svg class="b-logo" width="100%" height="100%" viewBox="0 0 142 196" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <g transform="matrix(1,0,0,1,-382.091,-223.099)">
                    <path d="M384.218,416.578L384.218,225.226L433.724,225.226C445.556,225.226 455.83,227.917 464.549,233.299C473.267,238.681 477.626,247.288 477.626,259.119L477.626,285.674C477.626,299.107 469.441,308.581 453.073,314.097C470.331,318.367 478.96,327.574 478.96,341.719L478.96,378.815C478.96,391.447 474.846,400.899 466.617,407.171C458.388,413.442 448.58,416.578 437.193,416.578L384.218,416.578ZM437.994,292.454L437.994,259.812C437.994,253.123 434.08,249.779 426.251,249.779L426.251,302.621C434.08,302.621 437.994,299.232 437.994,292.454ZM437.994,381.884L437.994,333.445C437.994,326.773 434.08,323.437 426.251,323.437L426.251,392.025C434.08,392.025 437.994,388.645 437.994,381.884Z" style="fill:none;fill-rule:nonzero;stroke-width:4.25px;"/>
                    <rect x="487.1" y="388.689" width="34.694" height="27.889" style="fill:none;fill-rule:nonzero;stroke-width:4.25px;"/>
                </g>
            </svg>

        </div>
    </div>
    