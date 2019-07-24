<?php $id = get_field( 'id' ); ?>
<?php echo $id; ?>
<?php $section_type = get_field( 'section_type' ); ?>
<?php $image = get_field( 'image' ); ?>
<?php $imageURL = $image['url']; ?>
<?php $imageALT = $image['alt']; ?>
<?php if ( $image ) { ?>
	<img src="<?php echo $imageURL; ?>" alt="<?php echo $imageALT; ?>" />
<?php } ?>
<?php $image_title = get_field( 'image_title' ); ?>
<?php echo $image_title; ?>
<?php $image_link_title = get_field( 'image_link_title' ); ?>
<?php echo $image_link_title; ?>
<?php $image_link_type = get_field( 'image_link_type' ); ?>
<?php $image_external_url = get_field( 'image_external_url' ); ?>
<?php echo $image_external_url; ?>
<?php $image_text_link = get_field( 'image_text_link' ); ?>
<?php echo $image_text_link; ?>
<?php the_field( 'image_internal_page' ); ?>
<?php if ( have_rows( 'slides' ) ) : ?>
	<?php while ( have_rows( 'slides' ) ) : the_row(); ?>
		<?php $slide_image = get_sub_field( 'slide_image' ); ?>
		<?php $slide_imageURL = $slide_image['url']; ?>
		<?php $slide_imageALT = $slide_image['alt']; ?>
		<?php if ( $slide_image ) { ?>
			<img src="<?php echo $slide_imageURL; ?>" alt="<?php echo $slide_imageALT; ?>" />
		<?php } ?>
		<?php $slide_title = get_sub_field( 'slide_title' ); ?>
		<?php echo $slide_title; ?>
		<?php $slide_link_title = get_sub_field( 'slide_link_title' ); ?>
		<?php echo $slide_link_title; ?>
		<?php $slide_link_type = get_sub_field( 'slide_link_type' ); ?>
		<?php $slide_external_url = get_sub_field( 'slide_external_url' ); ?>
		<?php echo $slide_external_url; ?>
		<?php $slide_text_link = get_sub_field( 'slide_text_link' ); ?>
		<?php echo $slide_text_link; ?>
		<?php the_sub_field( 'slide_internal_page' ); ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>