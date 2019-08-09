<?php $column_count = get_field( 'column_count' ); ?>
<?php echo $column_count; ?>
<?php if ( have_rows( 'columns' ) ) : ?>
    <?php while ( have_rows( 'columns' ) ) : the_row(); ?>
        <?php $image = get_sub_field( 'image' ); ?>
        <?php $imageURL = $image['url']; ?>
        <?php $imageALT = $image['alt']; ?>
        <?php if ( $image ) { ?>
            <img src="<?php echo $imageURL; ?>" alt="<?php echo $imageALT; ?>" />
        <?php } ?>
        <?php $link_text = get_sub_field( 'link_text' ); ?>
        <?php echo $link_text; ?>
        <?php $link_type = get_sub_field( 'link_type' ); ?>
        <?php $external_url = get_sub_field( 'external_url' ); ?>
        <?php echo $external_url; ?>
        <?php $text_link = get_sub_field( 'text_link' ); ?>
        <?php echo $text_link; ?>
        <?php the_sub_field( 'internal_page' ); ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>