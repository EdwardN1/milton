<?php
/**
 * The template for displaying search form
 */
?>
<div class="search-form-container">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <div class="grid-x">
            <div class="cell auto">
                <label>
                    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'jointswp' ) ?></span>
                    <input type="search" class="search-field"
                           placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>"
                           value="<?php echo get_search_query() ?>" name="s"
                           title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>"/>
                </label>
            </div>
            <div class="cell shrink">
                <button type="submit"><img src="<?php echo get_icon( 'Search' ); ?>"></button>
            </div>
        </div>
    </form>
</div>