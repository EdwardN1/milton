<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div id="top-bar-menu">
	<div class="top-bar-right show-for-large">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right hide-for-large">
		<ul class="menu">
            <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			<li><a data-toggle="off-canvas" class="text-center menu-button"><img src="<?php echo get_icon('Menu Bars') ?>"><br>Menu</a></li>
		</ul>
	</div>
</div>