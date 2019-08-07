<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">

    <!-- If Site Icon isn't set in customizer -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
        <!-- Icons & Favicons -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png"
              rel="apple-touch-icon"/>
	<?php } ?>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="off-canvas-wrapper">

    <!-- Load off-canvas container. Feel free to remove if not using. -->
	<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

    <div class="off-canvas-content" data-off-canvas-content>
        <div class="fixed-header"></div>
        <header class="header" role="banner">
            <div class="show-for-large">
                <div id="account-bar">
                    <div class="grid-container">
                        <div class="grid-x">
                            <div class="cell auto"></div>
                            <div id="account-sign-in" class="cell shrink"
                                 style="background-image: url(<?php echo get_icon( 'Account Sign In' ); ?>"><a href="#">Account
                                    Sign-In >></a></div>
                        </div>
                    </div>
                </div>

                <div id="top-section">
                    <div class="grid-container">
                        <div class="grid-x">
                            <div class="cell auto">
								<?php $logo = get_field( 'logo', 'option' ) ?>
                                <a href="/"><img class="logo" src="<?php echo $logo['url']; ?>"/></a>
                            </div>
                            <div class="cell shrink">
                                <div class="grid-x">
                                    <div class="cell auto"></div>
                                    <div class="cell shrink">
                                        <div id="cart-totals"
                                             style="background-image: url(<?php echo get_icon( 'Basket' ); ?>)">
                                            <a href="#">
                                                Basket 2
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="utility-bar">
                                    <div class="grid-x">
                                        <div class="cell auto"></div>
                                        <div class="cell shrink tel"><a
                                                    href="<?php the_field( 'telephone_link', 'option' ); ?>"><?php the_field( 'telephone_number', 'option' ); ?></a>
                                        </div>
                                        <div class="cell shrink search"><?php get_search_form(); ?></div>
                                        <div class="cell shrink social">
											<?php
											$facebook = get_social_media( 'Facebook' );
											$linkedin = get_social_media( 'Linked In' );
											$twitter  = get_social_media( 'Twitter' );
											?>
											<?php if ( $facebook ): ?>
                                                <a href="<?php echo $facebook['link']; ?>" target="_blank"><img
                                                            src="<?php echo $facebook['icon']; ?>"></a>
											<?php endif; ?>
											<?php if ( $linkedin ): ?>
                                                <a href="<?php echo $linkedin['link']; ?>" target="_blank"><img
                                                            src="<?php echo $linkedin['icon']; ?>"></a>
											<?php endif; ?>
											<?php if ( $twitter ): ?>
                                                <a href="<?php echo $twitter['link']; ?>" target="_blank"><img
                                                            src="<?php echo $twitter['icon']; ?>"></a>
											<?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- This navs will be applied to the topbar, above all content
                 To see additional nav styles, visit the /parts directory -->
			<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

        </header> <!-- end .header -->