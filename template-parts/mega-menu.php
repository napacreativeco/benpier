
    <!--
    =========================================
    MENU
    =========================================
    -->
    <?php
    $default_image = get_theme_mod('mm_zero__image');
    ?>
    <div class="menu" style="background: url('<?php echo $default_image ?>'); background-size: cover; background-position: center center;">
        <div class="menu-wrapper">

            <!-- Menu Grid -->
            <nav class="menu-row">

                <!-- 1 -->
                <div class="cell" data-background="<?php echo get_theme_mod('mm_one__image') ?>">
                    <div class="text-wrap">
                        <a href="<?php echo home_url(); ?>/<?php echo get_theme_mod('mm_one__collection', 'commissions'); ?>" title="<?php echo get_theme_mod('mm_one__text') ?>" class="haetten">
                            <?php echo get_theme_mod('mm_one__text', 'Commissions') ?>
                        </a>
                    </div>                  
                </div>

                <!-- 2 -->
                <div class="cell" data-background="<?php echo get_theme_mod('mm_two__image') ?>">
                    <div class="text-wrap">
                        <a href="<?php echo home_url(); ?>/<?php echo get_theme_mod('mm_two__collection', 'personal'); ?>" title="<?php echo get_theme_mod('mm_two__text') ?>" class="haetten">
                            <?php echo get_theme_mod('mm_two__text', 'Personal') ?>
                        </a>
                    </div>                  
                </div>

                <!-- 3 -->
                <div class="cell" data-background="<?php echo get_theme_mod('mm_three__image') ?>">
                    <div class="text-wrap">
                        <a href="<?php echo home_url(); ?>/<?php echo get_theme_mod('mm_three__collection', 'films'); ?>" title="<?php echo get_theme_mod('mm_three__text') ?>" class="haetten">
                            <?php echo get_theme_mod('mm_three__text', 'Films') ?>
                        </a>
                    </div>
                </div>

                <!-- 4 -->
                <div class="cell" data-background="<?php echo get_theme_mod('mm_four__image') ?>">
                    <div class="text-wrap">
                        <a href="<?php echo home_url(); ?>/<?php echo get_theme_mod('mm_four__collection', 'books'); ?>" title="<?php echo get_theme_mod('mm_four__text') ?>" class="haetten">
                            <?php echo get_theme_mod('mm_four__text', 'Books') ?>
                        </a>
                    </div>
                </div>

                <!-- 5 -->
                <div class="cell" data-background="<?php echo get_theme_mod('mm_five__image') ?>">
                    <div class="text-wrap">
                        <a href="<?php echo home_url(); ?>/<?php echo get_theme_mod('mm_five__collection', 'prints'); ?>" title="<?php echo get_theme_mod('mm_five__text') ?>" class="haetten">
                            <?php echo get_theme_mod('mm_five__text', 'Prints') ?>
                        </a>
                    </div>
                </div>

                <!-- 6 -->
                <div class="cell" data-background="<?php echo get_theme_mod('mm_six__image') ?>">
                    <div class="text-wrap">
                        <a href="<?php echo home_url(); ?>/shop" title="<?php echo get_theme_mod('mm_six__text') ?>" class="haetten">
                            <?php echo get_theme_mod('mm_six__text', 'Shop') ?>
                        </a>
                    </div>
                </div>

            </nav>

            <!-- Menu Actions -->
            <div class="menu-actions">

                <div class="action-wrapper">
                    <div class="home-wrapper">
                        <div class="home-button">
                            <span class="home">
                                <a href="/" title="Home"><span class="haetten">Home</span></a>
                            </span>
                        </div>
                    </div>

                    <div class="close-wrapper">
                        <div class="close-button">
                            <span class="close">
                                <span class="haetten">&times; Close</span>
                            </span>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>