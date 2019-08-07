<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer" role="contentinfo">

    <div class="grid-container show-for-large">
        <div id="newsletter-form" class="grid-x">
            <div class="cell auto newsletter-message">
                Sign up our newsletter for all the latest offers
            </div>
            <div class="cell shrink">
				<?php
				gravity_form( 1, false, false, false, '', true );
				?>
            </div>
        </div>
    </div>
    <div id="footer-links-container">
        <div class="grid-x">
            <div class="cell auto"></div>
            <div class="cell shrink">
                <nav role="navigation">
					<?php joints_footer_links(); ?>
                </nav>
            </div>
            <div class="cell auto"></div>
        </div>
    </div>

    <div id="footer-base">
        <div class="grid-container">
            <div class="grid-x show-for-large">
                <div class="cell shrink">
                    <div class="logo-reversed">
						<?php
						$logo_reversed    = get_field( 'logo_reversed', 'option' );
						$logo_reversedURL = $logo_reversed['url'];
						$logo_reversedALT = $logo_reversed['alt'];
						?>
                        <img src="<?php echo $logo_reversedURL; ?>" alt="<?php echo $logo_reversedALT; ?>"/>
                    </div>
					<?php if ( have_rows( 'social_media_sites', 'option' ) ): ?>
                        <div class="social-icons">
                            <div class="grid-x">
								<?php while ( have_rows( 'social_media_sites', 'option' ) ): the_row(); ?>
                                    <div class="social-icon cell auto">
										<?php
										$name             = get_sub_field( 'name' );
										$icon_reversed    = get_sub_field( 'icon_reversed' );
										$icon_reversedURL = $icon_reversed['url'];
										$link             = get_sub_field( 'link' );
										$include          = get_sub_field( 'include' );
										?>
										<?php if ( $include ): ?>
                                            <a href="<?php echo $link; ?>" target="_blank">
                                                <img src="<?php echo $icon_reversedURL; ?>" alt="<?php echo $name; ?>">
                                            </a>
										<?php endif; ?>
                                    </div>
								<?php endwhile; ?>
                            </div>
                        </div>
					<?php endif; ?>
                </div>
                <div class="cell auto">
                    <div class="text-center">
						<?php echo get_footer_column( 'Top' ); ?>
                    </div>
                    <div class="text-center footer-tel">
                        <a href="<?php echo get_field( 'telephone_link', 'option' ); ?>"><?php echo get_field( 'telephone_number', 'option' ); ?></a>
                    </div>
                    <div class="text-center">
						<?php echo get_footer_column( 'Opening Times' ); ?>
                    </div>
                    <div class="text-center">
						<?php echo get_field( 'address', 'option' ); ?></br>
                        <a href="mailto:<?php echo get_field( 'email_address', 'option' ); ?>">email: <?php echo get_field( 'email_address', 'option' ); ?></a>
                    </div>
                </div>
                <div class="cell shrink secondary-logos">
                    <img src="<?php echo get_secondary_logo( 'Beta Trade Member' ); ?>" alt="Beta Trade Member"/>
                </div>
            </div>
            <div class="hide-for-large">
                <div class="text-center">
					<?php echo strip_tags(get_footer_column( 'Top' )); ?> <a
                            href="<?php echo get_field( 'telephone_link', 'option' ); ?>"><?php echo get_field( 'telephone_number', 'option' ); ?></a>
                </div>

                <div class="footer-mobile-icons">
                    <div class="grid-x">
                        <div class="cell shrink">
							<?php if ( have_rows( 'social_media_sites', 'option' ) ): ?>
                                <div class="social-icons">
                                    <div class="grid-x">
										<?php while ( have_rows( 'social_media_sites', 'option' ) ): the_row(); ?>
                                            <div class="social-icon cell auto">
												<?php
												$name             = get_sub_field( 'name' );
												$icon_reversed    = get_sub_field( 'icon_reversed' );
												$icon_reversedURL = $icon_reversed['url'];
												$link             = get_sub_field( 'link' );
												$include          = get_sub_field( 'include' );
												?>
												<?php if ( $include ): ?>
                                                    <a href="<?php echo $link; ?>" target="_blank">
                                                        <img src="<?php echo $icon_reversedURL; ?>"
                                                             alt="<?php echo $name; ?>">
                                                    </a>
												<?php endif; ?>
                                            </div>
										<?php endwhile; ?>
                                    </div>
                                </div>
							<?php endif; ?>
                        </div>
                        <div class="cell auto text-center social-icons">
                            <img src="<?php echo get_secondary_logo( 'Beta Trade Member' ); ?>"
                                 alt="Beta Trade Member"/>
                        </div>
                    </div>
                </div>
                <div class="text-center">
					<?php echo get_footer_column( 'Opening Times' ); ?>
                </div>
                <div class="text-center">
					<?php echo get_field( 'address', 'option' ); ?></br>
                    <a href="mailto:<?php echo get_field( 'email_address', 'option' ); ?>">email: <?php echo get_field( 'email_address', 'option' ); ?></a>
                </div>
            </div>

        </div>
    </div>

</footer> <!-- end .footer -->

</div>  <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->

<?php wp_footer(); ?>

</body>

</html> <!-- end page -->