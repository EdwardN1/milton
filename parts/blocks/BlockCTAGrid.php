<?php $column_count = get_field('column_count'); ?>
<?php $cellClass = ""; ?>
<?php if ($column_count == 2): ?>
    <?php $cellClass = " cell large-6 medium-6 small-12"; ?>
<?php endif; ?>
<?php if ($column_count == 3): ?>
    <?php $cellClass = " cell large-4 medium-4 small-12"; ?>
<?php endif; ?>
<?php if ($column_count == 4): ?>
    <?php $cellClass = " cell large-3 medium-3 small-12"; ?>
<?php endif; ?>
<?php if ($column_count == 5): ?>
    <?php $cellClass = " large-up-5 medium-up-3 small-up-1"; ?>
<?php endif; ?>
<?php if ($column_count == 6): ?>
    <?php $cellClass = " cell large-2 medium-4 small-12"; ?>
<?php endif; ?>
<?php $cellPadClass = ' right-cell-pad'; ?>

<?php if ( have_rows( 'columns' ) ) : ?>
    <?php while ( have_rows( 'columns' ) ) : the_row(); ?>
        <?php $image = get_sub_field( 'image' ); ?>
        <?php $imageURL = $image['url']; ?>
        <?php $imageALT = $image['alt']; ?>
        <?php if ( $image ) { ?>
            <img src="<?php echo $imageURL; ?>" alt="<?php echo $imageALT; ?>" />
        <?php } ?>
        <?php $heading = get_sub_field( 'heading' ); ?>
        <?php echo $heading; ?>
        <?php $heading_type = get_sub_field( 'heading_type' ); ?>
        <?php $strapline = get_sub_field( 'strapline' ); ?>
        <?php echo $strapline; ?>
        <?php $sub_heading = get_sub_field( 'sub_heading' ); ?>
        <?php echo $sub_heading; ?>
        <?php $description = get_sub_field( 'description' ); ?>
        <?php echo $description; ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>
