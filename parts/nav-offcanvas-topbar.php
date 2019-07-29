<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div id="top-bar-menu">
    <div id="mobile-header" class="hide-for-large">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell auto">
                    <?php $logo = get_field('logo', 'option') ?>
                    <a href="/"><img class="logo" src="<?php echo $logo['url']; ?>"/></a>
                </div>
                <div class="cell shrink">

                    <div class="menu-icons">
                        <div class="grid-x">
                            <div class="cell auto"></div>
                            <div id="mobile-cart-totals" class="cell shrink">
                                <a href="#">
                                    <img src="<?php echo get_icon('Basket'); ?>">
                                    <div>Basket</div>
                                </a>
                            </div>
                            <div id="mobile-menu-button" class="cell shrink"><a data-toggle="off-canvas"
                                                                                class="text-center menu-button"><img
                                            src="<?php echo get_icon('Menu Bars') ?>">
                                    <div>Menu</div>
                                </a></div>
                        </div>
                    </div>

                    <div class="tel">
                        <a href="<?php the_field('telephone_link', 'option'); ?>"><?php the_field('telephone_number', 'option'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="site-nav">
        <?php joints_top_nav(); ?>
    </div>
    <div id="mobile-search-bar" class="hide-for-large">
        <div class="grid-container">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>